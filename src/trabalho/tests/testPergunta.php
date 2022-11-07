<?php
    namespace Tests;

    use PHPUnit\Framework\TestCase;
    use App\Model\Pergunta;

    class TestPergunta extends TestCase{
        public function testStatus(){
            $pergunta = new Pergunta("teste", "done");
            $this->assertEquals($pergunta->getStatus(), "done");
        }
    }