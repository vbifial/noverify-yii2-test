<?php


class ProjectService
{
    /**
     * Entry point for application
     * @return string
     */
    public function run()
    {
        $result = '';

        $objectA = new ProjectModel();
        $objectA->testMethod();
        $result .= $objectA->testProperty;

        $objectB = ProjectModel::findOne(1);
        $objectB->testMethod();
        $result .= $objectB->testProperty;

        return $result;
    }
}