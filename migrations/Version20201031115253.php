<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201031115253 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE excursionreguliere (id INT AUTO_INCREMENT NOT NULL, nomfr VARCHAR(255) NOT NULL, nomes VARCHAR(255) NOT NULL, nomen VARCHAR(255) NOT NULL, presentationfr VARCHAR(2000) NOT NULL, presentationes VARCHAR(2000) NOT NULL, presentationen VARCHAR(2000) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE excursion CHANGE presentation presentation VARCHAR(255) NOT NULL, CHANGE presentationen presentationen VARCHAR(255) NOT NULL, CHANGE presentationes presentationes VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE excursionreguliere');
        $this->addSql('ALTER TABLE excursion CHANGE presentation presentation VARCHAR(2000) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE presentationen presentationen VARCHAR(2000) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE presentationes presentationes VARCHAR(2000) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
