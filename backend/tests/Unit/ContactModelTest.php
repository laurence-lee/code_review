<?php

namespace Tests\Unit;

use Tests\TestCase;

use App\Models\Contact;

class ContactModelTest extends TestCase
{
    public function testNewContactHasUuid()
    {
        $model = Contact::make();
        $this->assertTrue(gettype($model->uuid) === 'string');
    }
}
