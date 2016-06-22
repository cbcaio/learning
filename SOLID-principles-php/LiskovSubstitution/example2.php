<?php

interface LessonRepositoryInterface
{
    /**
     * This is one way to help you to remember to not return a different type and in consequence to not break the
     * principle
     *
     * @return array
     */
    public function getAll();
}

class FileLessonRepository implements LessonRepositoryInterface
{
    public function getAll()
    {
        // return through filesystem
        return [];
    }
}

class DbLessomRepository implements LessonRepositoryInterface
{
    public function getAll()
    {
        return Lesson::all(); //violates the LSP, different type of output
    }
}

function foo(LessonRepositoryInterface $lesson)
{
    $lessons = $lesson->getAll(); // must be an array!
}

