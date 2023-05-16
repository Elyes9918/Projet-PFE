<?php

namespace App\Services;

use App\Repository\FeedbackRepository;
use App\Repository\ImageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Asset\Packages;

class ImageService
{

    public function __construct(
        private ManagerRegistry $doctrine,
        private EntityManagerInterface $entityManager,
        private FeedbackRepository $feedbackRepository,
        private ImageRepository $imageRepository,
        private Packages $storage)
    { 
    }


    


}

