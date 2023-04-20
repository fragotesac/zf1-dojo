<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Dojo
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */


/**
 * Test class for Zend_Dojo_Form_Element_VerticalSlider.
 *
 * @category   Zend
 * @package    Zend_Dojo
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Zend_Dojo
 * @group      Zend_Dojo_Form
 */
class Zend_Dojo_Form_Element_VerticalSliderTest extends PHPUnit\Framework\TestCase
{
    protected $view;
    protected $element;

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     *
     * @return void
     */
    public function setUp(): void
    {
        Zend_Registry::_unsetInstance();
        Zend_Dojo_View_Helper_Dojo::setUseDeclarative();

        $this->view    = $this->getView();
        $this->element = $this->getElement();
        $this->element->setView($this->view);
    }

    /**
     * Tears down the fixture, for example, close a network connection.
     * This method is called after a test is executed.
     *
     * @return void
     */
    public function tearDown(): void
    {
    }

    public function getView()
    {
        $view = new Zend_View();
        $view->addHelperPath('Zend/Dojo/View/Helper/', 'Zend_Dojo_View_Helper');
        return $view;
    }

    public function getElement()
    {
        $element = new Zend_Dojo_Form_Element_VerticalSlider(
            'foo',
            array(
                'value' => 'some text',
                'label' => 'VerticalSlider',
                'class' => 'someclass',
                'style' => 'width: 100px;',
            )
        );
        return $element;
    }

    public function testSettingLeftDecorationDijitShouldProxyToLeftDecorationDijitParam()
    {
        $this->element->setLeftDecorationDijit('VerticalRule');
        $this->assertTrue($this->element->hasDijitParam('leftDecoration'));
        $leftDecoration = $this->element->getDijitParam('leftDecoration');

        $test = $this->element->getLeftDecoration();
        $this->assertSame($leftDecoration, $test);

        $this->assertArrayHasKey('dijit', $leftDecoration);
        $this->assertEquals('VerticalRule', $leftDecoration['dijit']);
    }

    public function testSettingLeftDecorationContainerShouldProxyToLeftDecorationDijitParam()
    {
        $this->element->setLeftDecorationContainer('left');
        $this->assertTrue($this->element->hasDijitParam('leftDecoration'));
        $leftDecoration = $this->element->getDijitParam('leftDecoration');

        $test = $this->element->getLeftDecoration();
        $this->assertSame($leftDecoration, $test);

        $this->assertArrayHasKey('container', $leftDecoration);
        $this->assertEquals('left', $leftDecoration['container']);
    }

    public function testSettingLeftDecorationLabelsShouldProxyToLeftDecorationDijitParam()
    {
        $labels = array('0%', '50%', '100%');
        $this->element->setLeftDecorationLabels($labels);
        $this->assertTrue($this->element->hasDijitParam('leftDecoration'));
        $leftDecoration = $this->element->getDijitParam('leftDecoration');

        $test = $this->element->getLeftDecoration();
        $this->assertSame($leftDecoration, $test);

        $this->assertArrayHasKey('labels', $leftDecoration);
        $this->assertSame($labels, $leftDecoration['labels']);
    }

    public function testSettingLeftDecorationParamsShouldProxyToLeftDecorationDijitParam()
    {
        $params = array(
            'container' => array(
                'style' => 'height:1.2em; font-size=75%;color:gray;',
            ),
            'list' => array(
                'style' => 'height:1em; font-size=75%;color:gray;',
            ),
        );
        $this->element->setLeftDecorationParams($params);
        $this->assertTrue($this->element->hasDijitParam('leftDecoration'));
        $leftDecoration = $this->element->getDijitParam('leftDecoration');

        $test = $this->element->getLeftDecoration();
        $this->assertSame($leftDecoration, $test);

        $this->assertArrayHasKey('params', $leftDecoration);
        $this->assertSame($params, $leftDecoration['params']);
    }

    public function testSettingLeftDecorationAttribsShouldProxyToLeftDecorationDijitParam()
    {
        $attribs = array(
            'container' => array(
                'style' => 'height:1.2em; font-size=75%;color:gray;',
            ),
            'list' => array(
                'style' => 'height:1em; font-size=75%;color:gray;',
            ),
        );
        $this->element->setLeftDecorationAttribs($attribs);
        $this->assertTrue($this->element->hasDijitParam('leftDecoration'));
        $leftDecoration = $this->element->getDijitParam('leftDecoration');

        $test = $this->element->getLeftDecoration();
        $this->assertSame($leftDecoration, $test);

        $this->assertArrayHasKey('attribs', $leftDecoration);
        $this->assertSame($attribs, $leftDecoration['attribs']);
    }

    public function testSettingRightDecorationDijitShouldProxyToRightDecorationDijitParam()
    {
        $this->element->setRightDecorationDijit('VerticalRule');
        $this->assertTrue($this->element->hasDijitParam('rightDecoration'));
        $rightDecoration = $this->element->getDijitParam('rightDecoration');

        $test = $this->element->getRightDecoration();
        $this->assertSame($rightDecoration, $test);

        $this->assertArrayHasKey('dijit', $rightDecoration);
        $this->assertEquals('VerticalRule', $rightDecoration['dijit']);
    }

    public function testSettingRightDecorationContainerShouldProxyToRightDecorationDijitParam()
    {
        $this->element->setRightDecorationContainer('right');
        $this->assertTrue($this->element->hasDijitParam('rightDecoration'));
        $rightDecoration = $this->element->getDijitParam('rightDecoration');

        $test = $this->element->getRightDecoration();
        $this->assertSame($rightDecoration, $test);

        $this->assertArrayHasKey('container', $rightDecoration);
        $this->assertEquals('right', $rightDecoration['container']);
    }

    public function testSettingRightDecorationLabelsShouldProxyToRightDecorationDijitParam()
    {
        $labels = array('0%', '50%', '100%');
        $this->element->setRightDecorationLabels($labels);
        $this->assertTrue($this->element->hasDijitParam('rightDecoration'));
        $rightDecoration = $this->element->getDijitParam('rightDecoration');

        $test = $this->element->getRightDecoration();
        $this->assertSame($rightDecoration, $test);

        $this->assertArrayHasKey('labels', $rightDecoration);
        $this->assertSame($labels, $rightDecoration['labels']);
    }

    public function testSettingRightDecorationParamsShouldProxyToRightDecorationDijitParam()
    {
        $params = array(
            'container' => array(
                'style' => 'height:1.2em; font-size=75%;color:gray;',
            ),
            'list' => array(
                'style' => 'height:1em; font-size=75%;color:gray;',
            ),
        );
        $this->element->setRightDecorationParams($params);
        $this->assertTrue($this->element->hasDijitParam('rightDecoration'));
        $rightDecoration = $this->element->getDijitParam('rightDecoration');

        $test = $this->element->getRightDecoration();
        $this->assertSame($rightDecoration, $test);

        $this->assertArrayHasKey('params', $rightDecoration);
        $this->assertSame($params, $rightDecoration['params']);
    }

    public function testSettingRightDecorationAttribsShouldProxyToRightDecorationDijitParam()
    {
        $attribs = array(
            'container' => array(
                'style' => 'height:1.2em; font-size=75%;color:gray;',
            ),
            'list' => array(
                'style' => 'height:1em; font-size=75%;color:gray;',
            ),
        );
        $this->element->setRightDecorationAttribs($attribs);
        $this->assertTrue($this->element->hasDijitParam('rightDecoration'));
        $rightDecoration = $this->element->getDijitParam('rightDecoration');

        $test = $this->element->getRightDecoration();
        $this->assertSame($rightDecoration, $test);

        $this->assertArrayHasKey('attribs', $rightDecoration);
        $this->assertSame($attribs, $rightDecoration['attribs']);
    }

    public function testShouldRenderVerticalSliderDijit()
    {
        $this->element->setMinimum(-10)
                      ->setMaximum(10)
                      ->setDiscreteValues(11);
        $html = $this->element->render();
        $this->assertStringContainsString('dojoType="dijit.form.VerticalSlider"', $html);
    }
}
