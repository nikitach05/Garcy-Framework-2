<?php
/**
 * Test class for phpMorphy_Paradigm_ArrayBased.
 * Generated by PHPUnit on 2010-12-22 at 01:03:36.
 */
class test_Paradigm_ArrayBased extends PHPUnit_Framework_TestCase
{
    /**
     * @var phpMorphy_Paradigm_ArrayBased
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $wf = new phpMorphy_WordForm_WordForm();
        $wf->setBase('test');
        $wf->setFormPrefix('');
        $wf->setSuffix('ing');
        $wf->setPartOfSpeech('pos');
        $wf->setFormGrammems(array('gr'));

        $this->object = new phpMorphy_Paradigm_ArrayBased;
        $this->object->append($wf);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    public function testClear()
    {
        $this->assertEquals(1, count($this->object));
        $this->object->clear();
        $this->assertEquals(0, count($this->object));
    }

    public function testOffsetUnset()
    {
        $this->assertEquals(1, count($this->object));
        unset($this->object[0]);
        $this->assertEquals(0, count($this->object));
    }

    /**
     * @todo Implement testOffsetSet().
     */
    public function testOffsetSet()
    {
        $wf = new phpMorphy_WordForm_WordForm();
        $this->object[0] = $wf;

        $this->assertEquals($wf, $this->object[0]);
    }

    /**
     * @todo Implement testAppend().
     */
    public function testAppend()
    {
        $wf = clone $this->object[0];

        $this->assertEquals(1, count($this->object));
        $this->object->append($wf);
        $this->assertEquals(2, count($this->object));
    }

    /**
     * @todo Implement testGetAllForms().
     */
    public function testGetAllForms()
    {
        $this->assertEquals(
            array('testing'),
            $this->object->getAllForms()
        );
    }

    /**
     * @todo Implement testGetPseudoRoot().
     */
    public function testGetPseudoRoot()
    {
        $this->assertEquals('test', $this->object->getPseudoRoot());
    }

    /**
     * @todo Implement testGetLemma().
     */
    public function testGetLemma()
    {
        $this->assertEquals('testing', $this->object->getLemma());
    }

    function testUpdateCommonBase() {
    }

    function testUpdateCommonGrammems() {
    }
}
?>