<?php
    class ProductsModel extends BaseModel{
        const TABLE = 'products';
        public function getAll($select = ['*'],$orderBys =[],$limit =15){
           return $this->All(self::TABLE,$select,$orderBys,$limit);
        }
        
        public function findById($id){
            return $this->find(self::TABLE,$id,'product_id');
        }

        public function store($data){
            $this->create(self::TABLE,$data);
        }

        public function updateData($id,$data){
            $this->update(self::TABLE,$id,$data,'product_id');
        }

        public function getProductByCategoryId($categoryId){
            
        }

        public function delete($id){
            return __METHOD__;
        }
    }
?>