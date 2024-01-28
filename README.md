## commands
```
docker-compsoe up -d
yarn run dev
```

## Create User
`php artisan tinker
```bash
DB::table('users')->insert(['name'=>'MyUsername','email'=>'thisis@myemail.com','password'=>Hash::make('123456')]);
``
