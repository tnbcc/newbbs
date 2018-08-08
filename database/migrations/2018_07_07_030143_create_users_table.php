<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('password');
            $table->integer('github_id')->index()->nullable()->comment('githubId');
            $table->string('github_name')->index()->nullable()->comment('github名称');
            $table->string('github_url')->nullable()->comment('githubUrl');
            $table->string('gender')->index()->default(\App\Models\User::SEX_UNKNOWN)->comment('性别: 0未知,1男,2女');
            $table->boolean('status')->index()->default(true)->comment('用户状态');
            $table->boolean('email_verified')->index()->default(false)->comment('邮箱验证');
            $table->string('alipay')->nullable()->comment('支付宝账号');
            $table->string('aliname')->nullable()->comment('支付宝实名');
            $table->string('remark')->nullable()->comment('备注');
            $table->string('true_ip')->nullable()->comment('获得用户真实IP');
            $table->decimal('total', 8, 2)->nullable()->default(0);
            $table->integer('notification_count')->unsigned()->default(0);
            $table->rememberToken();
            $table->dateTime('last_actived_at')->nullable()->comment('最后活跃时间');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
