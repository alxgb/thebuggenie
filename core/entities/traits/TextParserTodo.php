<?php

    namespace thebuggenie\core\entities\traits;

    /**
     * Trait for looking up files that are not linked
     *
     * @package thebuggenie
     * @subpackage traits
     */
    trait TextParserTodo
    {

        protected $todos = array();
        protected $done_todos = array();

        protected function _parse_todo($matches)
        {
            if (!isset($matches)) return '';

            $this->todos[] = $matches[2];

            return '<br>' . fa_image_tag('square-o', ['class' => 'todo-checkbox']) . $this->_parse_line($matches[2], $this->options);
        }

        public function getTodos()
        {
            return $this->todos;
        }

        protected function _parse_donetodo($matches)
        {
            if (!isset($matches)) return '';

            $this->done_todos[] = $matches[2];

            return '<br>' . fa_image_tag('check-square', ['class' => 'todo-checkbox']) . $this->_parse_line($matches[2], $this->options);
        }

        public function getDoneTodos()
        {
            return $this->done_todos;
        }

    }
