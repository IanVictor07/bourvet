<?php


namespace app\controllers;
use Yii;
use yii\data\SqlDataProvider;

class RelatoriosController extends \yii\web\Controller
{
   public function actionIndex()
   {
       return $this->render('index');
   }

   public function actionRelatorio1()
   {
       $consulta = new SqlDataProvider([
        'sql' => 'SELECT cliente.nome, COUNT(animal.nome)AS QUANTIDADE
        FROM cliente JOIN animal ON cliente.id = animal.cliente_id
        GROUP BY cliente.id
        DESC',
            ]
        );
        
        return $this->render('relatorio1', ['resultado' => $consulta]);
   }

   public function actionRelatorio2()
   {
       $consulta = new SqlDataProvider([
        'sql' => 'SELECT cliente.nome, COUNT(compra.id)AS QUANTIDADE
        FROM cliente JOIN compra ON cliente.id = compra.cliente_id
        GROUP BY cliente.id
        DESC',
            ]
        );
        
        return $this->render('relatorio2', ['resultado' => $consulta]);
   }

   public function actionRelatorio3()
   {
       $consulta = new SqlDataProvider([
        'sql' => 'SELECT cliente.nome, COUNT(consulta.id)AS QUANTIDADE
        FROM cliente JOIN consulta ON cliente.id = consulta.cliente_id
        GROUP BY cliente.id
        DESC',
            ]
        );
        
        return $this->render('relatorio3', ['resultado' => $consulta]);
   }

   public function actionRelatorio4()
   {
       $consulta = new SqlDataProvider([
        'sql' => 'SELECT veterinario.nome, COUNT(consulta.id)AS QUANTIDADE
        FROM veterinario JOIN consulta ON veterinario.id = consulta.veterinario_id
        GROUP BY veterinario.id
        DESC',
            ]
        );
        
        return $this->render('relatorio4', ['resultado' => $consulta]);
   }

}
