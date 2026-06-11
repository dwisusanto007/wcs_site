<?php

namespace Tests\Feature;

use App\Models\ContactMessage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_page_loads_successfully(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('Let&#039;s Work Together', false);
    }

    public function test_contact_page_loads_in_indonesian(): void
    {
        $response = $this->get('/id/contact');

        $response->assertStatus(200);
        $response->assertSee('Mari Bekerja Sama');
    }

    public function test_contact_form_submission_with_valid_data(): void
    {
        $data = [
            'full_name' => 'John Doe',
            'email' => 'john@example.com',
            'phone_number' => '+62 21 5092-4120',
            'company_name' => 'PT Test Company',
            'product_interest' => 'infrastructure',
            'message' => 'I am interested in your services.',
            'privacy_accepted' => '1',
        ];

        $response = $this->post('/contact', $data);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contact_messages', [
            'full_name' => 'John Doe',
            'email' => 'john@example.com',
            'phone_number' => '+62 21 5092-4120',
            'product_interest' => 'infrastructure',
            'locale' => 'en',
        ]);
    }

    public function test_contact_form_submission_stores_locale_id(): void
    {
        $data = [
            'full_name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'phone_number' => '021-5092-4120',
            'product_interest' => 'service',
            'privacy_accepted' => '1',
        ];

        $response = $this->post('/id/contact', $data);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contact_messages', [
            'full_name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'locale' => 'id',
        ]);
    }

    public function test_contact_form_validation_fails_with_missing_required_fields(): void
    {
        $response = $this->post('/contact', []);

        $response->assertRedirect();
        $response->assertSessionHasErrors(['full_name', 'email', 'phone_number', 'product_interest', 'privacy_accepted']);
    }

    public function test_contact_form_validation_fails_with_invalid_email(): void
    {
        $data = [
            'full_name' => 'John Doe',
            'email' => 'not-an-email',
            'phone_number' => '+62 21 5092-4120',
            'product_interest' => 'infrastructure',
            'privacy_accepted' => '1',
        ];

        $response = $this->post('/contact', $data);

        $response->assertSessionHasErrors(['email']);
    }

    public function test_contact_form_validation_fails_with_invalid_phone(): void
    {
        $data = [
            'full_name' => 'John Doe',
            'email' => 'john@example.com',
            'phone_number' => 'abc-invalid-phone!',
            'product_interest' => 'infrastructure',
            'privacy_accepted' => '1',
        ];

        $response = $this->post('/contact', $data);

        $response->assertSessionHasErrors(['phone_number']);
    }

    public function test_contact_form_validation_fails_with_invalid_product_interest(): void
    {
        $data = [
            'full_name' => 'John Doe',
            'email' => 'john@example.com',
            'phone_number' => '+62 21 5092-4120',
            'product_interest' => 'invalid-product',
            'privacy_accepted' => '1',
        ];

        $response = $this->post('/contact', $data);

        $response->assertSessionHasErrors(['product_interest']);
    }
}
