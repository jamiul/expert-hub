<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
        $this->call(AddonsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(BadgesTableSeeder::class);
        $this->call(BlogCategoriesTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(BookmarkedClientsTableSeeder::class);
        $this->call(BookmarkedFreelancersTableSeeder::class);
        $this->call(BookmarkedProjectsTableSeeder::class);
        $this->call(BookmarkedScholarshipsTableSeeder::class);
        $this->call(BookmarkedServicesTableSeeder::class);
        $this->call(CancelProjectsTableSeeder::class);
        $this->call(ChatThreadsTableSeeder::class);
        $this->call(ChatsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(ConsultantCategoriesTableSeeder::class);
        $this->call(DocumentsTableSeeder::class);
        $this->call(EducationDetailsTableSeeder::class);
        $this->call(FreelancerAccountsTableSeeder::class);
        $this->call(FreelancerServicesTableSeeder::class);
        $this->call(FreelancerServicesPackagesTableSeeder::class);
        $this->call(HireInvitationsTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(MilestonePaymentsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(ModelHasPermissionsTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(PackagePaymentsTableSeeder::class);
        $this->call(PackagesTableSeeder::class);
        $this->call(PageOptimizationsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PayToFreelancersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(PortfoliosTableSeeder::class);
        $this->call(ProjectCategoriesTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ProjectUsersTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(ProjectBidsTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(ScholarshipCategoriesTableSeeder::class);
        $this->call(ScholarshipCitiesTableSeeder::class);
        $this->call(ScholarshipCountriesTableSeeder::class);
        $this->call(ScholarshipFieldStudiesTableSeeder::class);
        $this->call(ScholarshipLevelsTableSeeder::class);
        $this->call(ScholarshipQualificationsTableSeeder::class);
        $this->call(ScholarshipUniversitiesTableSeeder::class);
        $this->call(ScholarshipWhoCanAppliesTableSeeder::class);
        $this->call(ScholarshipsTableSeeder::class);
        $this->call(SeminarModesTableSeeder::class);
        $this->call(SeminarSoftwareTableSeeder::class);
        $this->call(SeminarsTableSeeder::class);
        $this->call(SeminarDatesTableSeeder::class);
        $this->call(SeminarInstructorsTableSeeder::class);
        $this->call(ServicePaymentsTableSeeder::class);
        $this->call(SitePagesTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(SubscribersTableSeeder::class);
        $this->call(SystemConfigurationsTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
        $this->call(UploadsTableSeeder::class);
        $this->call(UserBadgesTableSeeder::class);
        $this->call(UserPackagesTableSeeder::class);
        $this->call(UserProfilesTableSeeder::class);
        $this->call(VerificationsTableSeeder::class);
        $this->call(WalletsTableSeeder::class);
        $this->call(WorkExperiencesTableSeeder::class);
        $this->call(CountryFlagSeederUpdate::class);
    }
}
