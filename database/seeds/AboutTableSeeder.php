<?php
use Illuminate\Database\Seeder;
use App\About;
class AboutTableSeeder extends Seeder
{
	public function run() {
		DB::table('about')->delete();
		About::create([	'title' => 'Aenean nec eros',
						'body' =>  'Vivamus eget nibh. Etiam cursus leo vel metus. Proin facilisis condimentum fermentum. Maecenas egestas vehicula tincidunt. Nunc a mattis ligula. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices pouere cubilia Curae.
Proin facilisis condimentum fermentum. Maecenas egestas vehicula tincidunt. Nunc a mattis ligula. Ut pharetra augue nec augue. Nam elit magna, hendrerit sit amet, tincidunt ac, virra sed, nulla. Donec porta diam eu massa. Quisq diam lorem.',
						'picture' => 'images/about/about.jpg'
		]);
	}
}