<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220121131844 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ingredient (id INT AUTO_INCREMENT NOT NULL, intitule VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE liste_ingredients_recette (id INT AUTO_INCREMENT NOT NULL, ingredient_id_id INT NOT NULL, recette_id INT NOT NULL, quantite INT NOT NULL, unite VARCHAR(32) NOT NULL, INDEX IDX_CFF463896676F996 (ingredient_id_id), INDEX IDX_CFF4638989312FE9 (recette_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE operation (id INT AUTO_INCREMENT NOT NULL, recette_id_id INT NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_1981A66D83B016C1 (recette_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recette (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, resumer VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE liste_ingredients_recette ADD CONSTRAINT FK_CFF463896676F996 FOREIGN KEY (ingredient_id_id) REFERENCES ingredient (id)');
        $this->addSql('ALTER TABLE liste_ingredients_recette ADD CONSTRAINT FK_CFF4638989312FE9 FOREIGN KEY (recette_id) REFERENCES recette (id)');
        $this->addSql('ALTER TABLE operation ADD CONSTRAINT FK_1981A66D83B016C1 FOREIGN KEY (recette_id_id) REFERENCES recette (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE liste_ingredients_recette DROP FOREIGN KEY FK_CFF463896676F996');
        $this->addSql('ALTER TABLE liste_ingredients_recette DROP FOREIGN KEY FK_CFF4638989312FE9');
        $this->addSql('ALTER TABLE operation DROP FOREIGN KEY FK_1981A66D83B016C1');
        $this->addSql('DROP TABLE ingredient');
        $this->addSql('DROP TABLE liste_ingredients_recette');
        $this->addSql('DROP TABLE operation');
        $this->addSql('DROP TABLE recette');
        $this->addSql('DROP TABLE user');
    }
}
