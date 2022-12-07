<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221207140756 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE continent_animal (continent_id INT NOT NULL, animal_id INT NOT NULL, INDEX IDX_E557C2C8921F4C77 (continent_id), INDEX IDX_E557C2C88E962C16 (animal_id), PRIMARY KEY(continent_id, animal_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE continent_animal ADD CONSTRAINT FK_E557C2C8921F4C77 FOREIGN KEY (continent_id) REFERENCES continent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE continent_animal ADD CONSTRAINT FK_E557C2C88E962C16 FOREIGN KEY (animal_id) REFERENCES animal (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE continent_animal DROP FOREIGN KEY FK_E557C2C8921F4C77');
        $this->addSql('ALTER TABLE continent_animal DROP FOREIGN KEY FK_E557C2C88E962C16');
        $this->addSql('DROP TABLE continent_animal');
    }
}
