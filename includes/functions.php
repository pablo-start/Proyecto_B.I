<?php
   function query(/*sql [, ... ]*/)
    {
        //SQL statement
        $sql = func_get_arg(0);

        //parameters, if any
        $parameters = array_slice(func_get_args(), 1);

        //try to connect to database
        static $handle;
        if (!isset($handle))
        {
            try
            {
                //connect to database
                $handle = new PDO("mysql:host=". SERVERNAME . ";dbname=" . DBNAME . ";port=" . PORT, USERNAME, PASSWORD);

                //ENSURE THAT PDO: : PREPARE RETURNS FALSE WHEN INVALID SQL
                $handle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }
            catch(Exception $e)
            {
                trigger_error($e->getMessage(), E_USER_ERROR);
                exit;

            }

        }

        //prepare sql statement
        $statement = $handle->prepare($sql);
        if($statement === false)
        {
            //trigger (big, oracle) error
            trigger_error($handle->errorInfo()[2], E_USER_ERROR);
            EXIT;
        }

        //EXECUTE SQL STATEMENT
        $result = $statement->execute($parameters);

        //return result set´s rews if any
        if($result !== false)
        {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        else 
        {
            return false;
        }
    }

   function redirect(){
       header("Location: http://example2.com");

   } 

?>
