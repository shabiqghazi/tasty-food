<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\About>
 */
class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'about' => "<p class=\"about-desc-text fw-semibold\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium consectetur similique exercitationem reprehenderit officiis debitis iste, cum sequi fuga voluptatem distinctio repellat numquam nobis inventore.</p><p class=\"about-desc-text\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur cupiditate maiores repudiandae quia, voluptatum unde, necessitatibus tenetur nihil voluptates, quibusdam illo suscipit quas atque aperiam!</p>",
            'visi' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem illum voluptatum quasi commodi repellat nostrum ratione aperiam illo veritatis hic nisi vero, repudiandae a consequuntur corporis consequatur odit dolor molestias optio quas impedit laudantium earum id quis! Dignissimos, sapiente temporibus! Aut, itaque debitis officia impedit repellendus placeat in quae! Vero repellendus voluptatem eveniet architecto iste praesentium quasi quaerat ratione non, veniam molestiae neque hic quia, animi, veritatis quas? Tempora, sed.",
            'misi' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem illum voluptatum quasi commodi repellat nostrum ratione aperiam illo veritatis hic nisi vero, repudiandae a consequuntur corporis consequatur odit dolor molestias optio quas impedit laudantium earum id quis! Dignissimos, sapiente temporibus! Aut, itaque debitis officia impedit repellendus placeat in quae! Vero repellendus voluptatem eveniet architecto iste praesentium quasi quaerat ratione non, veniam molestiae neque hic quia, animi, veritatis quas? Tempora, sed."
        ];
    }
}
