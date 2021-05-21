<?php

namespace App\Entity;

use App\Repository\VideoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VideoRepository::class)
 */
class Video
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_video;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_release;

    /**
     * @ORM\Column(type="float")
     */
    private $duration_looking;

    /**
     * @ORM\Column(type="integer")
     */
    private $follower_due;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $duration_view_average;

    /**
     * @ORM\Column(type="float")
     */
    private $percent_view_average;

    /**
     * @ORM\Column(type="integer")
     */
    private $percent_stay_thirty_secondes;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $pike_watching;

    /**
     * @ORM\Column(type="integer")
     */
    private $percent_who_finish;

    /**
     * @ORM\Column(type="integer")
     */
    private $total_view;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_impressions;

    /**
     * @ORM\Column(type="float")
     */
    private $percent_click;

    /**
     * @ORM\Column(type="float")
     */
    private $percent_sorce_1;

    /**
     * @ORM\Column(type="float")
     */
    private $percent_sorce_2;

    /**
     * @ORM\Column(type="float")
     */
    private $percent_sorce_3;

    /**
     * @ORM\Column(type="float")
     */
    private $percent_duration_view_no_follow;

    /**
     * @ORM\Column(type="float")
     */
    private $percent_duration_view_follow;

    /**
     * @ORM\ManyToOne(targetEntity=author::class, inversedBy="videos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $author;

    /**
     * @ORM\ManyToOne(targetEntity=source::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $sorce_1;

    /**
     * @ORM\ManyToOne(targetEntity=source::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $sorce_2;

    /**
     * @ORM\ManyToOne(targetEntity=source::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $sorce_3;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdVideo(): ?string
    {
        return $this->id_video;
    }

    public function setIdVideo(string $id_video): self
    {
        $this->id_video = $id_video;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDateRelease(): ?\DateTimeInterface
    {
        return $this->date_release;
    }

    public function setDateRelease(\DateTimeInterface $date_release): self
    {
        $this->date_release = $date_release;

        return $this;
    }

    public function getDurationLooking(): ?float
    {
        return $this->duration_looking;
    }

    public function setDurationLooking(float $duration_looking): self
    {
        $this->duration_looking = $duration_looking;

        return $this;
    }

    public function getFollowerDue(): ?int
    {
        return $this->follower_due;
    }

    public function setFollowerDue(int $follower_due): self
    {
        $this->follower_due = $follower_due;

        return $this;
    }

    public function getDurationViewAverage(): ?string
    {
        return $this->duration_view_average;
    }

    public function setDurationViewAverage(string $duration_view_average): self
    {
        $this->duration_view_average = $duration_view_average;

        return $this;
    }

    public function getPercentViewAverage(): ?float
    {
        return $this->percent_view_average;
    }

    public function setPercentViewAverage(float $percent_view_average): self
    {
        $this->percent_view_average = $percent_view_average;

        return $this;
    }

    public function getPercentStayThirtySecondes(): ?int
    {
        return $this->percent_stay_thirty_secondes;
    }

    public function setPercentStayThirtySecondes(int $percent_stay_thirty_secondes): self
    {
        $this->percent_stay_thirty_secondes = $percent_stay_thirty_secondes;

        return $this;
    }

    public function getPikeWatching(): ?string
    {
        return $this->pike_watching;
    }

    public function setPikeWatching(string $pike_watching): self
    {
        $this->pike_watching = $pike_watching;

        return $this;
    }

    public function getPercentWhoFinish(): ?int
    {
        return $this->percent_who_finish;
    }

    public function setPercentWhoFinish(int $percent_who_finish): self
    {
        $this->percent_who_finish = $percent_who_finish;

        return $this;
    }

    public function getTotalView(): ?int
    {
        return $this->total_view;
    }

    public function setTotalView(int $total_view): self
    {
        $this->total_view = $total_view;

        return $this;
    }

    public function getNbImpressions(): ?int
    {
        return $this->nb_impressions;
    }

    public function setNbImpressions(int $nb_impressions): self
    {
        $this->nb_impressions = $nb_impressions;

        return $this;
    }

    public function getPercentClick(): ?float
    {
        return $this->percent_click;
    }

    public function setPercentClick(float $percent_click): self
    {
        $this->percent_click = $percent_click;

        return $this;
    }

    public function getPercentSorce1(): ?float
    {
        return $this->percent_sorce_1;
    }

    public function setPercentSorce1(float $percent_sorce_1): self
    {
        $this->percent_sorce_1 = $percent_sorce_1;

        return $this;
    }

    public function getPercentSorce2(): ?float
    {
        return $this->percent_sorce_2;
    }

    public function setPercentSorce2(float $percent_sorce_2): self
    {
        $this->percent_sorce_2 = $percent_sorce_2;

        return $this;
    }

    public function getPercentSorce3(): ?float
    {
        return $this->percent_sorce_3;
    }

    public function setPercentSorce3(float $percent_sorce_3): self
    {
        $this->percent_sorce_3 = $percent_sorce_3;

        return $this;
    }

    public function getPercentDurationViewNoFollow(): ?float
    {
        return $this->percent_duration_view_no_follow;
    }

    public function setPercentDurationViewNoFollow(float $percent_duration_view_no_follow): self
    {
        $this->percent_duration_view_no_follow = $percent_duration_view_no_follow;

        return $this;
    }

    public function getPercentDurationViewFollow(): ?float
    {
        return $this->percent_duration_view_follow;
    }

    public function setPercentDurationViewFollow(float $percent_duration_view_follow): self
    {
        $this->percent_duration_view_follow = $percent_duration_view_follow;

        return $this;
    }

    public function getAuthor(): ?author
    {
        return $this->author;
    }

    public function setAuthor(?author $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getSorce1(): ?source
    {
        return $this->sorce_1;
    }

    public function setSorce1(?source $sorce_1): self
    {
        $this->sorce_1 = $sorce_1;

        return $this;
    }

    public function getSorce2(): ?source
    {
        return $this->sorce_2;
    }

    public function setSorce2(?source $sorce_2): self
    {
        $this->sorce_2 = $sorce_2;

        return $this;
    }

    public function getSorce3(): ?source
    {
        return $this->sorce_3;
    }

    public function setSorce3(?source $sorce_3): self
    {
        $this->sorce_3 = $sorce_3;

        return $this;
    }
}
