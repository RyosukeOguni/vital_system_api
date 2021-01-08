<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //男女を連想配列で準備
        $gender = ['male' => 1, 'female' => 2];
        //ランダムでひとつ、キーを取り出す
        $genderkey = array_rand($gender, 1);
        //症例を準備
        $diagnosis = [
            '脳性まひ',
            'てんかん',
            '水頭症',
            '脳脊髄腫瘍',
            '頭頸部腫瘍'
        ];
        //nameは、'male', 'female'のどちらかが入り、性別の名前を生成する
        //nameの性別と連動してsexに数値が入る
        return [
            'name' => $this->faker->name($genderkey),
            'sex' => $gender[$genderkey],
            'age' => $this->faker->numberBetween(1, 16),
            'diagnosis' => $this->faker->randomElement($diagnosis),
            'note' => $this->faker->realText,
        ];
    }
}
