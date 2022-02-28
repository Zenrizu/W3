<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class medicinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            'genericName'=> "fentanil",
            'form'=> "inj 0,05 mg/mL (i.m./i.v.)",
            'restrictionFormula'=> "5 amp/kasus",
            'desc'=> "inj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi",
            'faskesTK1'=> 0,
            'faskesTK2'=> 1,
            'faskesTK3'=> 1,
            'category_id'=> 1,
        ]);
        DB::table('medicines')->insert([
            'genericName'=> "morfin",
            'form'=> "tab 10 mg",
            'restrictionFormula'=> "initial dosis 3-4 tab/hari",
            'desc'=> "Hanya untuk pemakaian pada tindakan anestesi atau perawatan di Rumah Sakit",
            'faskesTK1'=> 0,
            'faskesTK2'=> 1,
            'faskesTK3'=> 1,
            'category_id'=> 1,
        ]);
        DB::table('medicines')->insert([
            'genericName'=> "asam mefenamat",
            'form'=> "kaps 250 mg",
            'restrictionFormula'=> "30 kaps/bulan",
            'desc'=> "-",
            'faskesTK1'=> 1,
            'faskesTK2'=> 1,
            'faskesTK3'=> 1,
            'category_id'=> 2,
        ]);
        DB::table('medicines')->insert([
            'genericName'=> "ketoprofen",
            'form'=> "sup 100 mg",
            'restrictionFormula'=> "2 sup/hari, maks 3 hari",
            'desc'=> "Untuk nyeri sedang sampai berat pada pasien yang tidak",
            'faskesTK1'=> 0,
            'faskesTK2'=> 1,
            'faskesTK3'=> 1,
            'category_id'=> 2,
        ]);
    }
}
