<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210521144301 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE video ADD sorce_2_id INT NOT NULL, ADD sorce_3_id INT NOT NULL');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2C85D32F6 FOREIGN KEY (sorce_2_id) REFERENCES source (id)');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2CB0E15593 FOREIGN KEY (sorce_3_id) REFERENCES source (id)');
        $this->addSql('CREATE INDEX IDX_7CC7DA2C85D32F6 ON video (sorce_2_id)');
        $this->addSql('CREATE INDEX IDX_7CC7DA2CB0E15593 ON video (sorce_3_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2C85D32F6');
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2CB0E15593');
        $this->addSql('DROP INDEX IDX_7CC7DA2C85D32F6 ON video');
        $this->addSql('DROP INDEX IDX_7CC7DA2CB0E15593 ON video');
        $this->addSql('ALTER TABLE video DROP sorce_2_id, DROP sorce_3_id');
    }
}
