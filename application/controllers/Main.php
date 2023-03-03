<?php

class Main extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Studentservice');
        $this->load->model('Studentmodel');
    }

    function index()
    {

        $studentservice = new Studentservice();
        $data['item'] = $studentservice->getall();

        $this->load->view('viewall', $data);
    }

    function create()
    {

        $this->load->view('create');
    }

    function savedata()
    {

        $studentmodel = new Studentmodel();
        $studentservice = new Studentservice();

        $studentmodel->setName($this->input->post('name'));
        $studentmodel->setAddress($this->input->post('address'));
        $studentmodel->setPhone($this->input->post('tel'));
        $studentmodel->setemail($this->input->post('email'));

        $studentservice->savedetails($studentmodel);

        redirect('Main');
    }

    function updatedata()
    {

        $studentmodel = new Studentmodel();
        $studentservice = new Studentservice();

        $studentmodel->setStudent_id($this->input->post('student_id'));
        $studentmodel->setName($this->input->post('name'));
        $studentmodel->setAddress($this->input->post('address'));
        $studentmodel->setPhone($this->input->post('tel'));
        $studentmodel->setemail($this->input->post('email'));

        $studentservice->updatedetails($studentmodel);

        redirect('Main');
    }


    function edit($id)
    {
        $studentservice = new Studentservice();
        $data['item'] = $studentservice->getedit($id);

        $this->load->view('update', $data);
    }

    function delete($id)
    {
        $studentservice = new Studentservice();
        $studentservice->deletedetails($id);

        redirect('Main');
    }
}
