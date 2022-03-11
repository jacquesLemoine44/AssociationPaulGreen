<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220311132346 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE params ADD politiqueparams LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actions_assos CHANGE titleactionsasso titleactionsasso VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE pictureactionsasso pictureactionsasso VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE textactionsasso textactionsasso LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE linkactionsasso linkactionsasso VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE titlelinkactionsasso titlelinkactionsasso VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE alt_picture_actions_assos alt_picture_actions_assos VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE contacts CHANGE subjet_contact subjet_contact VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE content_contact content_contact LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE name_contact name_contact VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email_contact email_contact VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE doc_actions_assos CHANGE titledocactionsasso titledocactionsasso VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE linkdocactionsasso linkdocactionsasso VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE functions CHANGE mission mission VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description_function description_function LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE grouping_partners CHANGE title_grouping_partner title_grouping_partner VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE link_actions_assos CHANGE titlelinkactionsasso titlelinkactionsasso VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE linkactionsasso linkactionsasso VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE news CHANGE title_new title_new VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE picture_new picture_new VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE text_new text_new LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE altpicturenew altpicturenew VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE news_photos CHANGE photo_new_photo photo_new_photo VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE alt_news_photo alt_news_photo VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE params DROP politiqueparams, CHANGE text_param text_param LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE logo_param logo_param VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE photo_param photo_param VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email_param email_param VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE title_param title_param VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE address1_param address1_param VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE address2_param address2_param VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE cp_param cp_param VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE town_param town_param VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE subtitleparam subtitleparam VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE partners CHANGE name_partner name_partner VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE text_partner text_partner LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE photo_partner photo_partner VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE logo_partner logo_partner VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE link_partner link_partner VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE photos_actions_assos CHANGE photoactionsasso photoactionsasso VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE altphotoactionsasso altphotoactionsasso VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE social_networks CHANGE social_network social_network VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE logo_socialnetwork logo_socialnetwork VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE code_socialnetwork code_socialnetwork VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE link_socialnetwork link_socialnetwork VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE themes CHANGE name_theme name_theme VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description_theme description_theme LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE users CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE name_user name_user VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE first_name_user first_name_user VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE address1_user address1_user VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE address2_user address2_user VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE cp_user cp_user VARCHAR(100) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE town_user town_user VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE phone_user phone_user VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE photo_user photo_user VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE study_user study_user VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
