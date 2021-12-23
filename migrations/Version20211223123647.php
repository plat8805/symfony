<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211223123647 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE booking (id INT IDENTITY NOT NULL, customer_id INT, total_price NUMERIC(10, 2) NOT NULL, shipping_price NUMERIC(10, 2) NOT NULL, shipping_method NVARCHAR(255) NOT NULL, PRIMARY KEY (id))');
        $this->addSql('CREATE INDEX IDX_E00CEDDE9395C3F3 ON booking (customer_id)');
        $this->addSql('CREATE TABLE booking_item (id INT IDENTITY NOT NULL, product_id INT, booking_id INT, quantity INT NOT NULL, unit_price NUMERIC(10, 2) NOT NULL, PRIMARY KEY (id))');
        $this->addSql('CREATE INDEX IDX_78A07504584665A ON booking_item (product_id)');
        $this->addSql('CREATE INDEX IDX_78A07503301C60 ON booking_item (booking_id)');
        $this->addSql('CREATE TABLE customer (id INT IDENTITY NOT NULL, email NVARCHAR(180) NOT NULL, roles VARCHAR(MAX) NOT NULL, password NVARCHAR(255) NOT NULL, PRIMARY KEY (id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_81398E09E7927C74 ON customer (email) WHERE email IS NOT NULL');
        $this->addSql('EXEC sp_addextendedproperty N\'MS_Description\', N\'(DC2Type:json)\', N\'SCHEMA\', \'dbo\', N\'TABLE\', \'customer\', N\'COLUMN\', roles');
        $this->addSql('CREATE TABLE product (id INT IDENTITY NOT NULL, brand_id INT NOT NULL, name NVARCHAR(255) NOT NULL, description VARCHAR(MAX) NOT NULL, price NUMERIC(10, 2) NOT NULL, quantity INT NOT NULL, status BIT NOT NULL, PRIMARY KEY (id))');
        $this->addSql('CREATE INDEX IDX_D34A04AD44F5D008 ON product (brand_id)');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE9395C3F3 FOREIGN KEY (customer_id) REFERENCES customer (id)');
        $this->addSql('ALTER TABLE booking_item ADD CONSTRAINT FK_78A07504584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE booking_item ADD CONSTRAINT FK_78A07503301C60 FOREIGN KEY (booking_id) REFERENCES booking (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD44F5D008 FOREIGN KEY (brand_id) REFERENCES brand (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA db_accessadmin');
        $this->addSql('CREATE SCHEMA db_backupoperator');
        $this->addSql('CREATE SCHEMA db_datareader');
        $this->addSql('CREATE SCHEMA db_datawriter');
        $this->addSql('CREATE SCHEMA db_ddladmin');
        $this->addSql('CREATE SCHEMA db_denydatareader');
        $this->addSql('CREATE SCHEMA db_denydatawriter');
        $this->addSql('CREATE SCHEMA db_owner');
        $this->addSql('CREATE SCHEMA db_securityadmin');
        $this->addSql('CREATE SCHEMA dbo');
        $this->addSql('ALTER TABLE booking_item DROP CONSTRAINT FK_78A07503301C60');
        $this->addSql('ALTER TABLE booking DROP CONSTRAINT FK_E00CEDDE9395C3F3');
        $this->addSql('ALTER TABLE booking_item DROP CONSTRAINT FK_78A07504584665A');
        $this->addSql('DROP TABLE booking');
        $this->addSql('DROP TABLE booking_item');
        $this->addSql('DROP TABLE customer');
        $this->addSql('DROP TABLE product');
    }
}
