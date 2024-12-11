<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/products/goods/index.php');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->click('Добавить');
        $I->fillField('name','Кофта');
        $I->fillField('price','190');
        $I->fillField('article','7895');
        $I->click('Отправить');
        $I->canSee('Кофта');
        $I->canSee('190');
        $I->canSee('7895');
        $I->wait(6);
    }
    public function upd(AcceptanceTester $I)
    {
        $I->click('Изменить');
        $I->wait(3);
        $I->fillField('name','куртка');
        $I->fillField('price','250');
        $I->fillField('article','7895');
        $I->click('Сохранить');
        $I->canSee('куртка');
        $I->canSee('250');
        $I->canSee('7895');
        $I->wait(6);
    }
    public function del(AcceptanceTester $I)
    {
        $I->click('Удалить');
    }
}
