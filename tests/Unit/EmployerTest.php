<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to many jobs', function () {
   $employer = Employer::factory()->create();
    Job::factory(10)->create([
        'employer_id' => $employer->id,
    ]);


   expect($employer->jobs)->toHaveCount(10);
});
