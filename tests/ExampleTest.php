<?php

namespace Sparkout\ModuleUserAuth\Tests;

class ExampleTest extends TestCase
{
    /**
     * testBasicExample
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->assertInstanceOf(\Sparkout\ModuleUserAuth\ModuleUserAuth::class, app('module-user-auth'));
        $this->assertInstanceOf(\Sparkout\ModuleUserAuth\ModuleUserAuth::class, \Sparkout\ModuleUserAuth\ModuleUserAuthFacade::getFacadeRoot());
    }
}
