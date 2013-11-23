<?php

class PeopleTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
//		 DB::table('people')->truncate();

		$people = array(
                    ['firstname'=>'Dexcleir','lastname'=>'Rañin','gender'=>'male','middlename'=>'L.','age'=>22,'cell_number'=>'09351840596','person_status'=>1,'photo'=>'dex_101.jpg'],
                    ['firstname'=>'Alben','lastname'=>'Sandot','gender'=>'male','middlename'=>'B.','age'=>22,'cell_number'=>'09351840596','person_status'=>1,'photo'=>'alben_101.jpg'],
                    ['firstname'=>'Leivince','lastname'=>'Marte','gender'=>'male','middlename'=>'B.','age'=>23,'cell_number'=>'09351840596','person_status'=>1,'photo'=>'vince_101.jpg'],
                    ['firstname'=>'Rannel John','lastname'=>'Catolpos','gender'=>'male','middlename'=>'B.','age'=>22,'cell_number'=>'09351840596','person_status'=>1,'photo'=>'ran_101.jpg']
		);

		// Uncomment the below to run the seeder
//		 DB::table('people')->insert($people);
	}

}
