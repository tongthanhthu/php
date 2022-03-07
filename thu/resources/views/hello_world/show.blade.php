  @foreach($w as $tl)
  {{$tl->id}}
  @endforeach  
         public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mail_address',255)->unique();
            $table->string('password',255);
            $table->string('name',255);
            $table->string('address',255);
            $table->string('phone',15);
            $table->datetime('create_at');
            $table->datetime('update_at');
            $table->datetime('delete_at');

        });
    }