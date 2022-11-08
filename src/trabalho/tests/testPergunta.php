<?php
    namespace Tests;

    use PHPUnit\Framework\TestCase;
    use App\Model\Pergunta;

    class TestPergunta extends TestCase{
        public function testStatus(){
            $pergunta = new Pergunta("teste", "done");
            $this->assertContains($pergunta->getStatus(), ["done", "clear"]);

            $pergunta = new Pergunta("teste", "clear");
            $this->assertContains($pergunta->getStatus(), ["done", "clear"]);

            $pergunta = new Pergunta("teste", "teste");
            $this->assertNotContains($pergunta->getStatus(), ["done", "clear"]);
        }
    }