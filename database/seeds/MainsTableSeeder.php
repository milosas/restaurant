<?php
use App\Main;
use Illuminate\Database\Seeder;

class MainsTableSeeder extends Seeder
{
  protected $main;
  public function __construct(Main $main){
  $this->main = $main;
}
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->main->create([
        'title'=>'Sriubos'
      ]);
      $this->main->create([
        'title'=>'Karsti patiekalai'
      ]);
      $this->main->create([
        'title'=>'Uzkandziai'
      ]);
      $this->main->create([
        'title'=>'Desertai'
      ]);
    }
}
