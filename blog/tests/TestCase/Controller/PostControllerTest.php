<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\PostController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\PostController Test Case
 *
 * @uses \App\Controller\PostController
 */
class PostControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Post',
    ];
}
