<?php

class Studentservice extends CI_Model
{

    function getall()
    {

        $this->db->select('*');
        $this->db->from('student');

        $query = $this->db->get();


        return $query->result();
    }

    function savedetails($studentmodel)
    {

        $data = array('name' => $studentmodel->getname(), 'address' => $studentmodel->getaddress(), 'email' => $studentmodel->getemail(), 'phone' => $studentmodel->getphone());

        return $this->db->insert('student', $data);
    }

    function getedit($id)
    {

        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('student_id=', $id);

        $query = $this->db->get();


        return $query->result();
    }

    function updatedetails($studentmodel)
    {
        $data = array('name' => $studentmodel->getname(), 'address' => $studentmodel->getaddress(), 'email' => $studentmodel->getemail(), 'phone' => $studentmodel->getphone());


        $id = $studentmodel->getStudent_id();

        $this->db->where('student_id=', $id);

        return $this->db->update('student', $data);
    }

    function deletedetails($id)
    {

        $this->db->where('student_id=', $id);

        return $this->db->delete('student');
    }
}
