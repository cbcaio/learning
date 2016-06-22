<?php
namespace SOLID\SingleResponsibility\afterPrinciple;

class SalesReporter {

    /**
     * @var SalesRepository
     */
    private $repo;

    public function __construct(SalesRepository $repo)
    {
        $this->repo = $repo;
    }

    public function beetween($startDate, $endDate, SalesOutputInterface $formatter){

        $sales = $this->repo->between($startDate,$endDate);

        return $formatter->output($sales);
    }
}