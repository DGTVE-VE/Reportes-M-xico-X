<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return AssessmentAiclassifierDAO
	 */
	public static function getAssessmentAiclassifierDAO(){
		return new AssessmentAiclassifierMySqlExtDAO();
	}

	/**
	 * @return AssessmentAiclassifiersetDAO
	 */
	public static function getAssessmentAiclassifiersetDAO(){
		return new AssessmentAiclassifiersetMySqlExtDAO();
	}

	/**
	 * @return AssessmentAigradingworkflowDAO
	 */
	public static function getAssessmentAigradingworkflowDAO(){
		return new AssessmentAigradingworkflowMySqlExtDAO();
	}

	/**
	 * @return AssessmentAitrainingworkflowDAO
	 */
	public static function getAssessmentAitrainingworkflowDAO(){
		return new AssessmentAitrainingworkflowMySqlExtDAO();
	}

	/**
	 * @return AssessmentAitrainingworkflowTrainingExamplesDAO
	 */
	public static function getAssessmentAitrainingworkflowTrainingExamplesDAO(){
		return new AssessmentAitrainingworkflowTrainingExamplesMySqlExtDAO();
	}

	/**
	 * @return AssessmentAssessmentDAO
	 */
	public static function getAssessmentAssessmentDAO(){
		return new AssessmentAssessmentMySqlExtDAO();
	}

	/**
	 * @return AssessmentAssessmentfeedbackDAO
	 */
	public static function getAssessmentAssessmentfeedbackDAO(){
		return new AssessmentAssessmentfeedbackMySqlExtDAO();
	}

	/**
	 * @return AssessmentAssessmentfeedbackAssessmentsDAO
	 */
	public static function getAssessmentAssessmentfeedbackAssessmentsDAO(){
		return new AssessmentAssessmentfeedbackAssessmentsMySqlExtDAO();
	}

	/**
	 * @return AssessmentAssessmentfeedbackOptionsDAO
	 */
	public static function getAssessmentAssessmentfeedbackOptionsDAO(){
		return new AssessmentAssessmentfeedbackOptionsMySqlExtDAO();
	}

	/**
	 * @return AssessmentAssessmentfeedbackoptionDAO
	 */
	public static function getAssessmentAssessmentfeedbackoptionDAO(){
		return new AssessmentAssessmentfeedbackoptionMySqlExtDAO();
	}

	/**
	 * @return AssessmentAssessmentpartDAO
	 */
	public static function getAssessmentAssessmentpartDAO(){
		return new AssessmentAssessmentpartMySqlExtDAO();
	}

	/**
	 * @return AssessmentCriterionDAO
	 */
	public static function getAssessmentCriterionDAO(){
		return new AssessmentCriterionMySqlExtDAO();
	}

	/**
	 * @return AssessmentCriterionoptionDAO
	 */
	public static function getAssessmentCriterionoptionDAO(){
		return new AssessmentCriterionoptionMySqlExtDAO();
	}

	/**
	 * @return AssessmentPeerworkflowDAO
	 */
	public static function getAssessmentPeerworkflowDAO(){
		return new AssessmentPeerworkflowMySqlExtDAO();
	}

	/**
	 * @return AssessmentPeerworkflowitemDAO
	 */
	public static function getAssessmentPeerworkflowitemDAO(){
		return new AssessmentPeerworkflowitemMySqlExtDAO();
	}

	/**
	 * @return AssessmentRubricDAO
	 */
	public static function getAssessmentRubricDAO(){
		return new AssessmentRubricMySqlExtDAO();
	}

	/**
	 * @return AssessmentStudenttrainingworkflowDAO
	 */
	public static function getAssessmentStudenttrainingworkflowDAO(){
		return new AssessmentStudenttrainingworkflowMySqlExtDAO();
	}

	/**
	 * @return AssessmentStudenttrainingworkflowitemDAO
	 */
	public static function getAssessmentStudenttrainingworkflowitemDAO(){
		return new AssessmentStudenttrainingworkflowitemMySqlExtDAO();
	}

	/**
	 * @return AssessmentTrainingexampleDAO
	 */
	public static function getAssessmentTrainingexampleDAO(){
		return new AssessmentTrainingexampleMySqlExtDAO();
	}

	/**
	 * @return AssessmentTrainingexampleOptionsSelectedDAO
	 */
	public static function getAssessmentTrainingexampleOptionsSelectedDAO(){
		return new AssessmentTrainingexampleOptionsSelectedMySqlExtDAO();
	}

	/**
	 * @return AuthGroupDAO
	 */
	public static function getAuthGroupDAO(){
		return new AuthGroupMySqlExtDAO();
	}

	/**
	 * @return AuthGroupPermissionsDAO
	 */
	public static function getAuthGroupPermissionsDAO(){
		return new AuthGroupPermissionsMySqlExtDAO();
	}

	/**
	 * @return AuthPermissionDAO
	 */
	public static function getAuthPermissionDAO(){
		return new AuthPermissionMySqlExtDAO();
	}

	/**
	 * @return AuthRegistrationDAO
	 */
	public static function getAuthRegistrationDAO(){
		return new AuthRegistrationMySqlExtDAO();
	}

	/**
	 * @return AuthUserDAO
	 */
	public static function getAuthUserDAO(){
		return new AuthUserMySqlExtDAO();
	}

	/**
	 * @return AuthUserGroupsDAO
	 */
	public static function getAuthUserGroupsDAO(){
		return new AuthUserGroupsMySqlExtDAO();
	}

	/**
	 * @return AuthUserUserPermissionsDAO
	 */
	public static function getAuthUserUserPermissionsDAO(){
		return new AuthUserUserPermissionsMySqlExtDAO();
	}

	/**
	 * @return AuthUserprofileDAO
	 */
	public static function getAuthUserprofileDAO(){
		return new AuthUserprofileMySqlExtDAO();
	}

	/**
	 * @return BrandingBrandinginfoconfigDAO
	 */
	public static function getBrandingBrandinginfoconfigDAO(){
		return new BrandingBrandinginfoconfigMySqlExtDAO();
	}

	/**
	 * @return BulkEmailCourseauthorizationDAO
	 */
	public static function getBulkEmailCourseauthorizationDAO(){
		return new BulkEmailCourseauthorizationMySqlExtDAO();
	}

	/**
	 * @return BulkEmailCourseemailDAO
	 */
	public static function getBulkEmailCourseemailDAO(){
		return new BulkEmailCourseemailMySqlExtDAO();
	}

	/**
	 * @return BulkEmailCourseemailtemplateDAO
	 */
	public static function getBulkEmailCourseemailtemplateDAO(){
		return new BulkEmailCourseemailtemplateMySqlExtDAO();
	}

	/**
	 * @return BulkEmailOptoutDAO
	 */
	public static function getBulkEmailOptoutDAO(){
		return new BulkEmailOptoutMySqlExtDAO();
	}

	/**
	 * @return CeleryTaskmetaDAO
	 */
	public static function getCeleryTaskmetaDAO(){
		return new CeleryTaskmetaMySqlExtDAO();
	}

	/**
	 * @return CeleryTasksetmetaDAO
	 */
	public static function getCeleryTasksetmetaDAO(){
		return new CeleryTasksetmetaMySqlExtDAO();
	}

	/**
	 * @return CertificatesCertificatewhitelistDAO
	 */
	public static function getCertificatesCertificatewhitelistDAO(){
		return new CertificatesCertificatewhitelistMySqlExtDAO();
	}

	/**
	 * @return CertificatesGeneratedcertificateDAO
	 */
	public static function getCertificatesGeneratedcertificateDAO(){
		return new CertificatesGeneratedcertificateMySqlExtDAO();
	}

	/**
	 * @return CircuitServercircuitDAO
	 */
	public static function getCircuitServercircuitDAO(){
		return new CircuitServercircuitMySqlExtDAO();
	}

	/**
	 * @return ContentstoreVideouploadconfigDAO
	 */
	public static function getContentstoreVideouploadconfigDAO(){
		return new ContentstoreVideouploadconfigMySqlExtDAO();
	}

	/**
	 * @return CourseActionStateCoursererunstateDAO
	 */
	public static function getCourseActionStateCoursererunstateDAO(){
		return new CourseActionStateCoursererunstateMySqlExtDAO();
	}

	/**
	 * @return CourseCreatorsCoursecreatorDAO
	 */
	public static function getCourseCreatorsCoursecreatorDAO(){
		return new CourseCreatorsCoursecreatorMySqlExtDAO();
	}

	/**
	 * @return CourseGroupsCourseusergroupDAO
	 */
	public static function getCourseGroupsCourseusergroupDAO(){
		return new CourseGroupsCourseusergroupMySqlExtDAO();
	}

	/**
	 * @return CourseGroupsCourseusergroupUsersDAO
	 */
	public static function getCourseGroupsCourseusergroupUsersDAO(){
		return new CourseGroupsCourseusergroupUsersMySqlExtDAO();
	}

	/**
	 * @return CourseGroupsCourseusergrouppartitiongroupDAO
	 */
	public static function getCourseGroupsCourseusergrouppartitiongroupDAO(){
		return new CourseGroupsCourseusergrouppartitiongroupMySqlExtDAO();
	}

	/**
	 * @return CourseModesCoursemodeDAO
	 */
	public static function getCourseModesCoursemodeDAO(){
		return new CourseModesCoursemodeMySqlExtDAO();
	}

	/**
	 * @return CourseModesCoursemodesarchiveDAO
	 */
	public static function getCourseModesCoursemodesarchiveDAO(){
		return new CourseModesCoursemodesarchiveMySqlExtDAO();
	}

	/**
	 * @return CourseStructuresCoursestructureDAO
	 */
	public static function getCourseStructuresCoursestructureDAO(){
		return new CourseStructuresCoursestructureMySqlExtDAO();
	}

	/**
	 * @return CoursewareOfflinecomputedgradeDAO
	 */
	public static function getCoursewareOfflinecomputedgradeDAO(){
		return new CoursewareOfflinecomputedgradeMySqlExtDAO();
	}

	/**
	 * @return CoursewareOfflinecomputedgradelogDAO
	 */
	public static function getCoursewareOfflinecomputedgradelogDAO(){
		return new CoursewareOfflinecomputedgradelogMySqlExtDAO();
	}

	/**
	 * @return CoursewareStudentmoduleDAO
	 */
	public static function getCoursewareStudentmoduleDAO(){
		return new CoursewareStudentmoduleMySqlExtDAO();
	}

	/**
	 * @return CoursewareStudentmodulehistoryDAO
	 */
	public static function getCoursewareStudentmodulehistoryDAO(){
		return new CoursewareStudentmodulehistoryMySqlExtDAO();
	}

	/**
	 * @return CoursewareXmodulestudentinfofieldDAO
	 */
	public static function getCoursewareXmodulestudentinfofieldDAO(){
		return new CoursewareXmodulestudentinfofieldMySqlExtDAO();
	}

	/**
	 * @return CoursewareXmodulestudentprefsfieldDAO
	 */
	public static function getCoursewareXmodulestudentprefsfieldDAO(){
		return new CoursewareXmodulestudentprefsfieldMySqlExtDAO();
	}

	/**
	 * @return CoursewareXmoduleuserstatesummaryfieldDAO
	 */
	public static function getCoursewareXmoduleuserstatesummaryfieldDAO(){
		return new CoursewareXmoduleuserstatesummaryfieldMySqlExtDAO();
	}

	/**
	 * @return DarkLangDarklangconfigDAO
	 */
	public static function getDarkLangDarklangconfigDAO(){
		return new DarkLangDarklangconfigMySqlExtDAO();
	}

	/**
	 * @return DjangoAdminLogDAO
	 */
	public static function getDjangoAdminLogDAO(){
		return new DjangoAdminLogMySqlExtDAO();
	}

	/**
	 * @return DjangoCommentClientPermissionDAO
	 */
	public static function getDjangoCommentClientPermissionDAO(){
		return new DjangoCommentClientPermissionMySqlExtDAO();
	}

	/**
	 * @return DjangoCommentClientPermissionRolesDAO
	 */
	public static function getDjangoCommentClientPermissionRolesDAO(){
		return new DjangoCommentClientPermissionRolesMySqlExtDAO();
	}

	/**
	 * @return DjangoCommentClientRoleDAO
	 */
	public static function getDjangoCommentClientRoleDAO(){
		return new DjangoCommentClientRoleMySqlExtDAO();
	}

	/**
	 * @return DjangoCommentClientRoleUsersDAO
	 */
	public static function getDjangoCommentClientRoleUsersDAO(){
		return new DjangoCommentClientRoleUsersMySqlExtDAO();
	}

	/**
	 * @return DjangoContentTypeDAO
	 */
	public static function getDjangoContentTypeDAO(){
		return new DjangoContentTypeMySqlExtDAO();
	}

	/**
	 * @return DjangoOpenidAuthAssociationDAO
	 */
	public static function getDjangoOpenidAuthAssociationDAO(){
		return new DjangoOpenidAuthAssociationMySqlExtDAO();
	}

	/**
	 * @return DjangoOpenidAuthNonceDAO
	 */
	public static function getDjangoOpenidAuthNonceDAO(){
		return new DjangoOpenidAuthNonceMySqlExtDAO();
	}

	/**
	 * @return DjangoOpenidAuthUseropenidDAO
	 */
	public static function getDjangoOpenidAuthUseropenidDAO(){
		return new DjangoOpenidAuthUseropenidMySqlExtDAO();
	}

	/**
	 * @return DjangoSessionDAO
	 */
	public static function getDjangoSessionDAO(){
		return new DjangoSessionMySqlExtDAO();
	}

	/**
	 * @return DjangoSiteDAO
	 */
	public static function getDjangoSiteDAO(){
		return new DjangoSiteMySqlExtDAO();
	}

	/**
	 * @return DjceleryCrontabscheduleDAO
	 */
	public static function getDjceleryCrontabscheduleDAO(){
		return new DjceleryCrontabscheduleMySqlExtDAO();
	}

	/**
	 * @return DjceleryIntervalscheduleDAO
	 */
	public static function getDjceleryIntervalscheduleDAO(){
		return new DjceleryIntervalscheduleMySqlExtDAO();
	}

	/**
	 * @return DjceleryPeriodictaskDAO
	 */
	public static function getDjceleryPeriodictaskDAO(){
		return new DjceleryPeriodictaskMySqlExtDAO();
	}

	/**
	 * @return DjceleryPeriodictasksDAO
	 */
	public static function getDjceleryPeriodictasksDAO(){
		return new DjceleryPeriodictasksMySqlExtDAO();
	}

	/**
	 * @return DjceleryTaskstateDAO
	 */
	public static function getDjceleryTaskstateDAO(){
		return new DjceleryTaskstateMySqlExtDAO();
	}

	/**
	 * @return DjceleryWorkerstateDAO
	 */
	public static function getDjceleryWorkerstateDAO(){
		return new DjceleryWorkerstateMySqlExtDAO();
	}

	/**
	 * @return EdxvalCoursevideoDAO
	 */
	public static function getEdxvalCoursevideoDAO(){
		return new EdxvalCoursevideoMySqlExtDAO();
	}

	/**
	 * @return EdxvalEncodedvideoDAO
	 */
	public static function getEdxvalEncodedvideoDAO(){
		return new EdxvalEncodedvideoMySqlExtDAO();
	}

	/**
	 * @return EdxvalProfileDAO
	 */
	public static function getEdxvalProfileDAO(){
		return new EdxvalProfileMySqlExtDAO();
	}

	/**
	 * @return EdxvalSubtitleDAO
	 */
	public static function getEdxvalSubtitleDAO(){
		return new EdxvalSubtitleMySqlExtDAO();
	}

	/**
	 * @return EdxvalVideoDAO
	 */
	public static function getEdxvalVideoDAO(){
		return new EdxvalVideoMySqlExtDAO();
	}

	/**
	 * @return EmbargoCountryDAO
	 */
	public static function getEmbargoCountryDAO(){
		return new EmbargoCountryMySqlExtDAO();
	}

	/**
	 * @return EmbargoCountryaccessruleDAO
	 */
	public static function getEmbargoCountryaccessruleDAO(){
		return new EmbargoCountryaccessruleMySqlExtDAO();
	}

	/**
	 * @return EmbargoCourseaccessrulehistoryDAO
	 */
	public static function getEmbargoCourseaccessrulehistoryDAO(){
		return new EmbargoCourseaccessrulehistoryMySqlExtDAO();
	}

	/**
	 * @return EmbargoEmbargoedcourseDAO
	 */
	public static function getEmbargoEmbargoedcourseDAO(){
		return new EmbargoEmbargoedcourseMySqlExtDAO();
	}

	/**
	 * @return EmbargoEmbargoedstateDAO
	 */
	public static function getEmbargoEmbargoedstateDAO(){
		return new EmbargoEmbargoedstateMySqlExtDAO();
	}

	/**
	 * @return EmbargoIpfilterDAO
	 */
	public static function getEmbargoIpfilterDAO(){
		return new EmbargoIpfilterMySqlExtDAO();
	}

	/**
	 * @return EmbargoRestrictedcourseDAO
	 */
	public static function getEmbargoRestrictedcourseDAO(){
		return new EmbargoRestrictedcourseMySqlExtDAO();
	}

	/**
	 * @return ExternalAuthExternalauthmapDAO
	 */
	public static function getExternalAuthExternalauthmapDAO(){
		return new ExternalAuthExternalauthmapMySqlExtDAO();
	}

	/**
	 * @return FolditPuzzlecompleteDAO
	 */
	public static function getFolditPuzzlecompleteDAO(){
		return new FolditPuzzlecompleteMySqlExtDAO();
	}

	/**
	 * @return FolditScoreDAO
	 */
	public static function getFolditScoreDAO(){
		return new FolditScoreMySqlExtDAO();
	}

	/**
	 * @return InstructorTaskInstructortaskDAO
	 */
	public static function getInstructorTaskInstructortaskDAO(){
		return new InstructorTaskInstructortaskMySqlExtDAO();
	}

	/**
	 * @return LicensesCoursesoftwareDAO
	 */
	public static function getLicensesCoursesoftwareDAO(){
		return new LicensesCoursesoftwareMySqlExtDAO();
	}

	/**
	 * @return LicensesUserlicenseDAO
	 */
	public static function getLicensesUserlicenseDAO(){
		return new LicensesUserlicenseMySqlExtDAO();
	}

	/**
	 * @return LmsXblockXblockasidesconfigDAO
	 */
	public static function getLmsXblockXblockasidesconfigDAO(){
		return new LmsXblockXblockasidesconfigMySqlExtDAO();
	}

	/**
	 * @return MilestonesCoursecontentmilestoneDAO
	 */
	public static function getMilestonesCoursecontentmilestoneDAO(){
		return new MilestonesCoursecontentmilestoneMySqlExtDAO();
	}

	/**
	 * @return MilestonesCoursemilestoneDAO
	 */
	public static function getMilestonesCoursemilestoneDAO(){
		return new MilestonesCoursemilestoneMySqlExtDAO();
	}

	/**
	 * @return MilestonesMilestoneDAO
	 */
	public static function getMilestonesMilestoneDAO(){
		return new MilestonesMilestoneMySqlExtDAO();
	}

	/**
	 * @return MilestonesMilestonerelationshiptypeDAO
	 */
	public static function getMilestonesMilestonerelationshiptypeDAO(){
		return new MilestonesMilestonerelationshiptypeMySqlExtDAO();
	}

	/**
	 * @return MilestonesUsermilestoneDAO
	 */
	public static function getMilestonesUsermilestoneDAO(){
		return new MilestonesUsermilestoneMySqlExtDAO();
	}

	/**
	 * @return NotesNoteDAO
	 */
	public static function getNotesNoteDAO(){
		return new NotesNoteMySqlExtDAO();
	}

	/**
	 * @return NotificationsArticlesubscriptionDAO
	 */
	public static function getNotificationsArticlesubscriptionDAO(){
		return new NotificationsArticlesubscriptionMySqlExtDAO();
	}

	/**
	 * @return NotifyNotificationDAO
	 */
	public static function getNotifyNotificationDAO(){
		return new NotifyNotificationMySqlExtDAO();
	}

	/**
	 * @return NotifyNotificationtypeDAO
	 */
	public static function getNotifyNotificationtypeDAO(){
		return new NotifyNotificationtypeMySqlExtDAO();
	}

	/**
	 * @return NotifySettingsDAO
	 */
	public static function getNotifySettingsDAO(){
		return new NotifySettingsMySqlExtDAO();
	}

	/**
	 * @return NotifySubscriptionDAO
	 */
	public static function getNotifySubscriptionDAO(){
		return new NotifySubscriptionMySqlExtDAO();
	}

	/**
	 * @return Oauth2AccesstokenDAO
	 */
	public static function getOauth2AccesstokenDAO(){
		return new Oauth2AccesstokenMySqlExtDAO();
	}

	/**
	 * @return Oauth2ClientDAO
	 */
	public static function getOauth2ClientDAO(){
		return new Oauth2ClientMySqlExtDAO();
	}

	/**
	 * @return Oauth2GrantDAO
	 */
	public static function getOauth2GrantDAO(){
		return new Oauth2GrantMySqlExtDAO();
	}

	/**
	 * @return Oauth2ProviderTrustedclientDAO
	 */
	public static function getOauth2ProviderTrustedclientDAO(){
		return new Oauth2ProviderTrustedclientMySqlExtDAO();
	}

	/**
	 * @return Oauth2RefreshtokenDAO
	 */
	public static function getOauth2RefreshtokenDAO(){
		return new Oauth2RefreshtokenMySqlExtDAO();
	}

	/**
	 * @return PsychometricsPsychometricdataDAO
	 */
	public static function getPsychometricsPsychometricdataDAO(){
		return new PsychometricsPsychometricdataMySqlExtDAO();
	}

	/**
	 * @return ReverificationMidcoursereverificationwindowDAO
	 */
	public static function getReverificationMidcoursereverificationwindowDAO(){
		return new ReverificationMidcoursereverificationwindowMySqlExtDAO();
	}

	/**
	 * @return ShoppingcartCertificateitemDAO
	 */
	public static function getShoppingcartCertificateitemDAO(){
		return new ShoppingcartCertificateitemMySqlExtDAO();
	}

	/**
	 * @return ShoppingcartCouponDAO
	 */
	public static function getShoppingcartCouponDAO(){
		return new ShoppingcartCouponMySqlExtDAO();
	}

	/**
	 * @return ShoppingcartCouponredemptionDAO
	 */
	public static function getShoppingcartCouponredemptionDAO(){
		return new ShoppingcartCouponredemptionMySqlExtDAO();
	}

	/**
	 * @return ShoppingcartCourseregcodeitemDAO
	 */
	public static function getShoppingcartCourseregcodeitemDAO(){
		return new ShoppingcartCourseregcodeitemMySqlExtDAO();
	}

	/**
	 * @return ShoppingcartCourseregcodeitemannotationDAO
	 */
	public static function getShoppingcartCourseregcodeitemannotationDAO(){
		return new ShoppingcartCourseregcodeitemannotationMySqlExtDAO();
	}

	/**
	 * @return ShoppingcartCourseregistrationcodeDAO
	 */
	public static function getShoppingcartCourseregistrationcodeDAO(){
		return new ShoppingcartCourseregistrationcodeMySqlExtDAO();
	}

	/**
	 * @return ShoppingcartCourseregistrationcodeinvoiceitemDAO
	 */
	public static function getShoppingcartCourseregistrationcodeinvoiceitemDAO(){
		return new ShoppingcartCourseregistrationcodeinvoiceitemMySqlExtDAO();
	}

	/**
	 * @return ShoppingcartDonationDAO
	 */
	public static function getShoppingcartDonationDAO(){
		return new ShoppingcartDonationMySqlExtDAO();
	}

	/**
	 * @return ShoppingcartDonationconfigurationDAO
	 */
	public static function getShoppingcartDonationconfigurationDAO(){
		return new ShoppingcartDonationconfigurationMySqlExtDAO();
	}

	/**
	 * @return ShoppingcartInvoiceDAO
	 */
	public static function getShoppingcartInvoiceDAO(){
		return new ShoppingcartInvoiceMySqlExtDAO();
	}

	/**
	 * @return ShoppingcartInvoicehistoryDAO
	 */
	public static function getShoppingcartInvoicehistoryDAO(){
		return new ShoppingcartInvoicehistoryMySqlExtDAO();
	}

	/**
	 * @return ShoppingcartInvoiceitemDAO
	 */
	public static function getShoppingcartInvoiceitemDAO(){
		return new ShoppingcartInvoiceitemMySqlExtDAO();
	}

	/**
	 * @return ShoppingcartInvoicetransactionDAO
	 */
	public static function getShoppingcartInvoicetransactionDAO(){
		return new ShoppingcartInvoicetransactionMySqlExtDAO();
	}

	/**
	 * @return ShoppingcartOrderDAO
	 */
	public static function getShoppingcartOrderDAO(){
		return new ShoppingcartOrderMySqlExtDAO();
	}

	/**
	 * @return ShoppingcartOrderitemDAO
	 */
	public static function getShoppingcartOrderitemDAO(){
		return new ShoppingcartOrderitemMySqlExtDAO();
	}

	/**
	 * @return ShoppingcartPaidcourseregistrationDAO
	 */
	public static function getShoppingcartPaidcourseregistrationDAO(){
		return new ShoppingcartPaidcourseregistrationMySqlExtDAO();
	}

	/**
	 * @return ShoppingcartPaidcourseregistrationannotationDAO
	 */
	public static function getShoppingcartPaidcourseregistrationannotationDAO(){
		return new ShoppingcartPaidcourseregistrationannotationMySqlExtDAO();
	}

	/**
	 * @return ShoppingcartRegistrationcoderedemptionDAO
	 */
	public static function getShoppingcartRegistrationcoderedemptionDAO(){
		return new ShoppingcartRegistrationcoderedemptionMySqlExtDAO();
	}

	/**
	 * @return SouthMigrationhistoryDAO
	 */
	public static function getSouthMigrationhistoryDAO(){
		return new SouthMigrationhistoryMySqlExtDAO();
	}

	/**
	 * @return SplashSplashconfigDAO
	 */
	public static function getSplashSplashconfigDAO(){
		return new SplashSplashconfigMySqlExtDAO();
	}

	/**
	 * @return StudentAnonymoususeridDAO
	 */
	public static function getStudentAnonymoususeridDAO(){
		return new StudentAnonymoususeridMySqlExtDAO();
	}

	/**
	 * @return StudentCourseaccessroleDAO
	 */
	public static function getStudentCourseaccessroleDAO(){
		return new StudentCourseaccessroleMySqlExtDAO();
	}

	/**
	 * @return StudentCourseenrollmentDAO
	 */
	public static function getStudentCourseenrollmentDAO(){
		return new StudentCourseenrollmentMySqlExtDAO();
	}

	/**
	 * @return StudentCourseenrollmentallowedDAO
	 */
	public static function getStudentCourseenrollmentallowedDAO(){
		return new StudentCourseenrollmentallowedMySqlExtDAO();
	}

	/**
	 * @return StudentDashboardconfigurationDAO
	 */
	public static function getStudentDashboardconfigurationDAO(){
		return new StudentDashboardconfigurationMySqlExtDAO();
	}

	/**
	 * @return StudentLinkedinaddtoprofileconfigurationDAO
	 */
	public static function getStudentLinkedinaddtoprofileconfigurationDAO(){
		return new StudentLinkedinaddtoprofileconfigurationMySqlExtDAO();
	}

	/**
	 * @return StudentLoginfailuresDAO
	 */
	public static function getStudentLoginfailuresDAO(){
		return new StudentLoginfailuresMySqlExtDAO();
	}

	/**
	 * @return StudentPasswordhistoryDAO
	 */
	public static function getStudentPasswordhistoryDAO(){
		return new StudentPasswordhistoryMySqlExtDAO();
	}

	/**
	 * @return StudentPendingemailchangeDAO
	 */
	public static function getStudentPendingemailchangeDAO(){
		return new StudentPendingemailchangeMySqlExtDAO();
	}

	/**
	 * @return StudentPendingnamechangeDAO
	 */
	public static function getStudentPendingnamechangeDAO(){
		return new StudentPendingnamechangeMySqlExtDAO();
	}

	/**
	 * @return StudentUsersignupsourceDAO
	 */
	public static function getStudentUsersignupsourceDAO(){
		return new StudentUsersignupsourceMySqlExtDAO();
	}

	/**
	 * @return StudentUserstandingDAO
	 */
	public static function getStudentUserstandingDAO(){
		return new StudentUserstandingMySqlExtDAO();
	}

	/**
	 * @return StudentUsertestgroupDAO
	 */
	public static function getStudentUsertestgroupDAO(){
		return new StudentUsertestgroupMySqlExtDAO();
	}

	/**
	 * @return StudentUsertestgroupUsersDAO
	 */
	public static function getStudentUsertestgroupUsersDAO(){
		return new StudentUsertestgroupUsersMySqlExtDAO();
	}

	/**
	 * @return SubmissionsScoreDAO
	 */
	public static function getSubmissionsScoreDAO(){
		return new SubmissionsScoreMySqlExtDAO();
	}

	/**
	 * @return SubmissionsScoresummaryDAO
	 */
	public static function getSubmissionsScoresummaryDAO(){
		return new SubmissionsScoresummaryMySqlExtDAO();
	}

	/**
	 * @return SubmissionsStudentitemDAO
	 */
	public static function getSubmissionsStudentitemDAO(){
		return new SubmissionsStudentitemMySqlExtDAO();
	}

	/**
	 * @return SubmissionsSubmissionDAO
	 */
	public static function getSubmissionsSubmissionDAO(){
		return new SubmissionsSubmissionMySqlExtDAO();
	}

	/**
	 * @return SurveySurveyanswerDAO
	 */
	public static function getSurveySurveyanswerDAO(){
		return new SurveySurveyanswerMySqlExtDAO();
	}

	/**
	 * @return SurveySurveyformDAO
	 */
	public static function getSurveySurveyformDAO(){
		return new SurveySurveyformMySqlExtDAO();
	}

	/**
	 * @return TrackTrackinglogDAO
	 */
	public static function getTrackTrackinglogDAO(){
		return new TrackTrackinglogMySqlExtDAO();
	}

	/**
	 * @return UserApiUsercoursetagDAO
	 */
	public static function getUserApiUsercoursetagDAO(){
		return new UserApiUsercoursetagMySqlExtDAO();
	}

	/**
	 * @return UserApiUserorgtagDAO
	 */
	public static function getUserApiUserorgtagDAO(){
		return new UserApiUserorgtagMySqlExtDAO();
	}

	/**
	 * @return UserApiUserpreferenceDAO
	 */
	public static function getUserApiUserpreferenceDAO(){
		return new UserApiUserpreferenceMySqlExtDAO();
	}

	/**
	 * @return UtilRatelimitconfigurationDAO
	 */
	public static function getUtilRatelimitconfigurationDAO(){
		return new UtilRatelimitconfigurationMySqlExtDAO();
	}

	/**
	 * @return VerifyStudentSoftwaresecurephotoverificationDAO
	 */
	public static function getVerifyStudentSoftwaresecurephotoverificationDAO(){
		return new VerifyStudentSoftwaresecurephotoverificationMySqlExtDAO();
	}

	/**
	 * @return WikiArticleDAO
	 */
	public static function getWikiArticleDAO(){
		return new WikiArticleMySqlExtDAO();
	}

	/**
	 * @return WikiArticleforobjectDAO
	 */
	public static function getWikiArticleforobjectDAO(){
		return new WikiArticleforobjectMySqlExtDAO();
	}

	/**
	 * @return WikiArticlepluginDAO
	 */
	public static function getWikiArticlepluginDAO(){
		return new WikiArticlepluginMySqlExtDAO();
	}

	/**
	 * @return WikiArticlerevisionDAO
	 */
	public static function getWikiArticlerevisionDAO(){
		return new WikiArticlerevisionMySqlExtDAO();
	}

	/**
	 * @return WikiArticlesubscriptionDAO
	 */
	public static function getWikiArticlesubscriptionDAO(){
		return new WikiArticlesubscriptionMySqlExtDAO();
	}

	/**
	 * @return WikiAttachmentDAO
	 */
	public static function getWikiAttachmentDAO(){
		return new WikiAttachmentMySqlExtDAO();
	}

	/**
	 * @return WikiAttachmentrevisionDAO
	 */
	public static function getWikiAttachmentrevisionDAO(){
		return new WikiAttachmentrevisionMySqlExtDAO();
	}

	/**
	 * @return WikiImageDAO
	 */
	public static function getWikiImageDAO(){
		return new WikiImageMySqlExtDAO();
	}

	/**
	 * @return WikiImagerevisionDAO
	 */
	public static function getWikiImagerevisionDAO(){
		return new WikiImagerevisionMySqlExtDAO();
	}

	/**
	 * @return WikiReusablepluginDAO
	 */
	public static function getWikiReusablepluginDAO(){
		return new WikiReusablepluginMySqlExtDAO();
	}

	/**
	 * @return WikiReusablepluginArticlesDAO
	 */
	public static function getWikiReusablepluginArticlesDAO(){
		return new WikiReusablepluginArticlesMySqlExtDAO();
	}

	/**
	 * @return WikiRevisionpluginDAO
	 */
	public static function getWikiRevisionpluginDAO(){
		return new WikiRevisionpluginMySqlExtDAO();
	}

	/**
	 * @return WikiRevisionpluginrevisionDAO
	 */
	public static function getWikiRevisionpluginrevisionDAO(){
		return new WikiRevisionpluginrevisionMySqlExtDAO();
	}

	/**
	 * @return WikiSimplepluginDAO
	 */
	public static function getWikiSimplepluginDAO(){
		return new WikiSimplepluginMySqlExtDAO();
	}

	/**
	 * @return WikiUrlpathDAO
	 */
	public static function getWikiUrlpathDAO(){
		return new WikiUrlpathMySqlExtDAO();
	}

	/**
	 * @return WorkflowAssessmentworkflowDAO
	 */
	public static function getWorkflowAssessmentworkflowDAO(){
		return new WorkflowAssessmentworkflowMySqlExtDAO();
	}

	/**
	 * @return WorkflowAssessmentworkflowstepDAO
	 */
	public static function getWorkflowAssessmentworkflowstepDAO(){
		return new WorkflowAssessmentworkflowstepMySqlExtDAO();
	}

	/**
	 * @return XblockConfigStudioconfigDAO
	 */
	public static function getXblockConfigStudioconfigDAO(){
		return new XblockConfigStudioconfigMySqlExtDAO();
	}


}
?>