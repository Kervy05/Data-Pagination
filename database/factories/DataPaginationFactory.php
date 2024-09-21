<?php

namespace Database\Factories;

use App\Models\DataPagination;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataPagination>
 */
class DataPaginationFactory extends Factory
{
    protected $model = DataPagination::class;



    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $birthdate = $this->faker->date('Y-m-d','1950-01-01');
        return [
            'firstname' => $this->faker->firstName(),
            'middlename' => $this->faker->lastName(),
            'lastname' => $this->faker->lastName(),
            'email' => $this->faker->unique()->email(),
            'birthdate' => $birthdate,
            'age' => \Carbon\Carbon::parse($birthdate)->age,
            'sex' => $this->faker->randomElement(['Male','Female']),
            'civilstatus' => $this->faker->randomElement(['Single' , 'Married' , 'Divorced' , 'Widow']),








        ];
    }
}
