<?php
require_once(__DIR__ . '/../database/DataBase.php');
require_once(__DIR__ . '/../../api/models/CreditModel.php');

class EntityCustomer
{
    public $db;

    function __construct()
    {
        $this->db = new DataBase();
    }


    public function addCredit($credit, $customerId, $references, $amount)
    {
        $resultArray = array();
        $firstRef = $references[0];
        $secondRef = $references[1];

        try {
            $this->db->connect();
            $query = "call sp_request_credit(" . $customerId . "," . $credit . "," . $amount . ",
        '" . $firstRef["name"] . "','" . $firstRef["firstSurname"] . "','" . $firstRef["secondSurname"] . "','" . $firstRef["telephone"] . "'," . $firstRef["meet"] . "
        ,'" . $secondRef["name"] . "','" . $secondRef["firstSurname"] . "','" . $secondRef["secondSurname"] . "','" . $secondRef["telephone"] . "'," . $secondRef["meet"] . ")";
            $query = $this->db->executeQuery($query);
            $resultSet = $query->fetch_array(MYSQLI_ASSOC);
            if ($resultSet > 0) {
                $resultArray =  array("result" => $resultSet["result"], "message" => $resultSet["message"]);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        } finally {
            $query->free();
            $this->db->disconnect();
        }
        return $resultArray;
    }


    public function renovateCredit($creditId)
    {
        $resultArray;
        try {
            $this->db->connect();
            $query = "call sp_renovateCredit(" . $creditId . ")";
            $query = $this->db->executeQuery($query);
            $resultSet = $query->fetch_array(MYSQLI_ASSOC);
            if ($resultSet > 0) {
                $resultArray =  array("result" => $resultSet["result"], "message" => $resultSet["message"]);
            }
            $query->free();
            $this->db->disconnect();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $resultArray;
    }

    public function reconsiderateCredit($creditId)
    {
        $resultArray = array();
        try {
            $this->db->connect();
            session_start();
            $customerId = $_SESSION["user"];
            $query = "call sp_request_reconsideration(" . $creditId . ", " . $customerId .")";
            $query = $this->db->executeQuery($query);
            $resultSet = $query->fetch_array(MYSQLI_ASSOC);
            if ($resultSet > 0) {
                $resultArray =  array("result" => $resultSet["result"], "message" => $resultSet["message"]);
            }
            $query->free();
            $this->db->disconnect();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $resultArray;
    }

    public function cancelCredit($creditId, $customerId)
    {
        $resultArray;
        try {
            $this->db->connect();
            $query = "call sp_request_cancellation(" . $creditId . "," . $customerId . ")";
            $query = $this->db->executeQuery($query);
            $resultSet = $query->fetch_array(MYSQLI_ASSOC);
            if ($resultSet > 0) {
                $resultArray =  array("result" => $resultSet["result"], "message" => $resultSet["message"]);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        } finally {
            $query->free();
            $this->db->disconnect();
        }
        return $resultArray;
    }

    public function getCredits($customerId)
    {
        $resultArray = array();
        try {
            $this->db->connect();
            $query = "call sp_get_credits(" . $customerId . ")";
            $query = $this->db->executeQuery($query);
            $dataResult = array();
            while ($resultSet = $query->fetch_array(MYSQLI_ASSOC)) {
                $dataResult[] = $resultSet;
            }
            if ($dataResult[0]["result"] == 1) { //Hay créditos asociados al cliente
                foreach ($dataResult as $resultSet => $row) {
                    $credit = new CreditModel();
                    $credit->setId($row["id"]);
                    $credit->setCreditKind($row["credit"]);
                    $credit->setTerm($row["term"]);
                    $credit->setRate($row["rate"]);
                    $credit->setFixedAmount($row["fixed_amount"]);
                    $credit->setAmount($row["amount"]);
                    $credit = json_encode($credit->toJson());
                    $credit = json_decode($credit);
                    $credit->status = $row["state"];
                    array_push($resultArray, $credit);
                }
                $resultArray = array(
                    "hasCredits" => $dataResult[0]["result"],
                    "creditList" => $resultArray
                );
            } else {
                $resultArray =  array("hasCredits" => $resultSet["result"], "message" => $resultSet["message"]);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        } finally {
            $query->free();
            $this->db->disconnect();
        }
        return $resultArray;
    }

    public function getNotifications($customerId)
    {
        $resultArray = array();
        $notificationFlag = false;
        try {
            $this->db->connect();
            $query = "select * from vw_notifications where customer =" . $customerId . " ";
            $query = $this->db->executeQuery($query);
            while ($resultSet = $query->fetch_array(MYSQLI_ASSOC)) {
                array_push($resultArray, array(
                    "request" => $resultSet["request"],
                    "state" => $resultSet["state"],
                    "date" => $resultSet["date_stamp"]
                ));
                $notificationFlag = true;
            }

            $resultArray = array(
                "hasNotifications" => $notificationFlag,
                "notificationList" => $resultArray
            );
        } catch (Exception $e) {
            echo $e->getMessage();
        } finally {
            $query->free();
            $this->db->disconnect();
        }
        return $resultArray;
    }
}
