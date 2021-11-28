<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211119015116 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Additional user properties';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD gender VARCHAR(255) NOT NULL, ADD latitude VARCHAR(255) NOT NULL, ADD longitude VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP gender, DROP latitude, DROP longitude');
    }
}
