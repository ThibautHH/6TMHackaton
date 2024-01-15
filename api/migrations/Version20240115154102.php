<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240115154102 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE team_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE team (id INT NOT NULL, premise_id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_C4E0A61FBD8D5AD9 ON team (premise_id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61FBD8D5AD9 FOREIGN KEY (premise_id) REFERENCES premise (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE team_id_seq CASCADE');
        $this->addSql('ALTER TABLE team DROP CONSTRAINT FK_C4E0A61FBD8D5AD9');
        $this->addSql('DROP TABLE team');
    }
}
