<?php

namespace Database\Factories;

use App\Models\Pqrsd;
use Illuminate\Database\Eloquent\Factories\Factory;

class pqrsdFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pqrsd::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'primerNombre'=>$this->faker->firstName(),
            'segundoNombre'=>$this->faker->firstName(),
            'primerApellido'=>$this->faker->lastName(),
            'segundoApellido'=>$this->faker->lastName(),
            'tipoDocumento'=>$this->faker->randomElement(['cedula de Cuidadania', 'cedula de extrangeria','registroCivil','targetaIdentidad']),
            'numeroIdentificacion'=>$this->faker->buildingNumber(),
            'fechaNacimiento'=>$this->faker->date(),
            'genero'=>$this->faker->randomElement(['masculino', 'femenino','otro']),
            'direccion'=>$this->faker->address(),
            'correoElectronico'=>$this->faker->email(),
            
            'descripcion'=>$this->faker->paragraph(),
            'estado'=>$this->faker->randomElement(['Enviado','enProceso','resuelto']),
            'urlPdf'=>$this->faker->url(),
       
        ];
    }
}
