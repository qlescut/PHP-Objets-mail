<?php


class mail
{
    private $from;
    private $to;
    private $object;
    private $message;

    public function __construct($from, $to, $object, $message)
    {
        $this->from = $from;
        $this->to = $to;
        $this->object = $object;
        $this->message = $message;
    }

        /**
         * @param mixed $from
         */
        public function setFrom($from)
        {
            $this->from = $from;
        }
        /**
         * @return mixed
         */
        public function getFrom()
        {
            return $this->from;
        }



        /**
         * @param mixed $to
         */
        public function setTo($to)
        {
            $this->to = $to;
        }
        /**
         * @return mixed
         */
        public function getTo()
        {
            return $this->to;
        }



        /**
         * @param mixed $object
         */
        public function setObject($object)
        {
            $this->object = $object;
        }
        /**
         * @return mixed
         */
        public function getObject()
        {
            return $this->object;
        }



        /**
         * @param mixed $message
         */
        public function setMessage($message)
        {
            $this->message = $message;
        }
        /**
         * @return mixed
         */
        public function getMessage()
        {
            return $this->message;
        }
}