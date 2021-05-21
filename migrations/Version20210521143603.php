<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210521143603 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE video ADD sorce_1_id INT NOT NULL');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2C1AE89D18 FOREIGN KEY (sorce_1_id) REFERENCES source (id)');
        $this->addSql('CREATE INDEX IDX_7CC7DA2C1AE89D18 ON video (sorce_1_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2C1AE89D18');
        $this->addSql('DROP INDEX IDX_7CC7DA2C1AE89D18 ON video');
        $this->addSql('ALTER TABLE video DROP sorce_1_id');
    }
}
