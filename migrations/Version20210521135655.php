<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210521135655 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE video (id INT AUTO_INCREMENT NOT NULL, id_video VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, date_release DATETIME NOT NULL, duration_looking DOUBLE PRECISION NOT NULL, follower_due INT NOT NULL, duration_view_average VARCHAR(10) NOT NULL, percent_view_average DOUBLE PRECISION NOT NULL, percent_stay_thirty_secondes INT NOT NULL, pike_watching VARCHAR(50) NOT NULL, percent_who_finish INT NOT NULL, total_view INT NOT NULL, nb_impressions INT NOT NULL, percent_click DOUBLE PRECISION NOT NULL, percent_sorce_1 DOUBLE PRECISION NOT NULL, percent_sorce_2 DOUBLE PRECISION NOT NULL, percent_sorce_3 DOUBLE PRECISION NOT NULL, percent_duration_view_no_follow DOUBLE PRECISION NOT NULL, percent_duration_view_follow DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE video');
    }
}
