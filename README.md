Next Hire 

Job Portal using laravel blade tailwind 



TODO:
fix custom font size in app.css

fix tag spacing issue -- done

fix image size issue 

seeding issue in sequence -- done
fix white screen issue after login --- done -- was calling redirect in if statement accidently

fix logout issue --- done -- used form 
instead of form componenet --

fix - error after creating job -- done was calling get in route insead of post -- 

fix -- create form select tag issue -- 
white

fix -- job type field issue -- 

learning
look into storeJobrequest (storeJobrequest $request ) -- im job controller store func

fix -- job card content 

fix -- remote issue 
fix -- schedule and featured issue
fix -- tags issue like same tags but capital and small are also considering diff

fix --- tag spacing top bottom -- 

----------


backend 

php artisan make:migration create_employers_table

php artisan make:model Employer -cfs --policy
php artisan migrate
php artisan make:model Job --all  

writing test in phpunit.xml 
php artisan make:test

  What should the test be named?
❯ JobTest


  Which type of test would you like?
  Feature ................................................ testing a wide spectrum of your application -- when i visit such and such page i expect to see that or when i make a post request to this controller then validation should occur and i should see such and such in db -- think testing a very wide range of your project 
  Unit ..................................... far more narrow  when i instantiate this class and i call that method then i expect such and such response -- how narrowe thats end up being differs based on the community for eg would testing an elequent model that  hits the db is that unit test soem say absolutely not i say sure who cares just make up your mind 

  we will be using unit

  -------

  php artisan make:model Tag -fm

php artisan make:migration create_job_tag_table

 
php artisan migrate  
php artisan db:seed

php artisan migrate:fresh --seed

php artisan migrate:fresh --seed

in job feature is for featured section

php artisan make:controller SessionController --resource

php artisan make:controller RegisteredUserController --resource

php artisan storage:link