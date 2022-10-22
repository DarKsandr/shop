<?php

namespace App\Console\Commands;

use App\Manticore\Index\ProductsIndex;
use App\Models\Product;
use Illuminate\Console\Command;

class ManticoreIndex extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'manticore:products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Manticore create products index';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(ProductsIndex $index)
    {
        //Drop old index
        $index->drop(true);
        //Create new index
        $index->create([
            'name'=>['type'=>'text'],
            'sku'=>['type'=>'text'],
            'description'=>['type'=>'text'],
            'real_price'=>['type'=>'float'],
        ], [
            'morphology' => 'stem_en,stem_ru',
            'expand_keywords' => 1,
            'min_infix_len' => 3,
        ]);

        $bar = $this->output->createProgressBar(Product::count());

        $bar->start();

        Product::chunk(200, function($products) use (&$index, &$bar){
            $documents = [];
            foreach($products as $product){
                $documents[] = $index->prepareData($product);
            }
            $index->addDocuments($documents);

            $bar->advance($products->count());
        });

        $bar->finish();
    }
}
