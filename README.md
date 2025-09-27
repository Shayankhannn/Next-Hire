Next Hire 

Job Portal using laravel blade tailwind 



TODO:
fixed custom font size in app.css
fixed tag spacing issue -- done
fix image size issue 
seeding issue in sequence -- done

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