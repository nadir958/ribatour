<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201015112404 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE excursion ADD nomen VARCHAR(255) NOT NULL, ADD presentationen VARCHAR(255) NOT NULL, ADD villeen VARCHAR(255) NOT NULL, ADD nomes VARCHAR(255) NOT NULL, ADD presentationes VARCHAR(255) NOT NULL, ADD villees VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE excursion DROP nomen, DROP presentationen, DROP villeen, DROP nomes, DROP presentationes, DROP villees');
    }
}
