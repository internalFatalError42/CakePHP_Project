<?php
declare(strict_types=1);

namespace StudentManager\Test\TestCase\Controller;

use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;
use StudentManager\Controller\StudentController;

/**
 * StudentManager\Controller\StudentController Test Case
 *
 * @uses \StudentManager\Controller\StudentController
 */
class StudentControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'plugin.StudentManager.Student',
    ];
}
