<?php

    function template($page,$data=array()){

        echo view('_components/top',$data);
        echo view('_components/nav');
        echo view('pages/' .$page);
        echo view('_components/footer');
        echo view('_components/bottom');
    }

    function getSomeList(){
        return  array(
            0 => 'Item 1',
        );
    }

    function getSomeListLotInfo(){
        return  array(
            0 =>  array(
                    'titulo'=>'title',
                    'descrição'=>'big text',
                    'extra_info'=>array(
                        0 => 'item 1',
                )
            ),
        );
    }

?>