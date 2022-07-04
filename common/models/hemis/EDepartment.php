<?php

namespace common\models\hemis;

use Yii;

/**
 * This is the model class for table "e_department".
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property int $_university
 * @property string $_structure_type
 * @property int|null $parent
 * @property int|null $position
 * @property bool|null $active
 * @property string|null $_translations
 * @property string $updated_at
 * @property string $created_at
 * @property string|null $_type
 * @property bool|null $_sync
 * @property int|null $_qid
 * @property string|null $_sync_diff
 * @property string|null $_sync_date
 * @property string|null $_sync_status
 *
 * @property EAcademicInformationData[] $eAcademicInformationDatas
 * @property EAcademicInformation[] $eAcademicInformations
 * @property EAdminMessageContact[] $eAdminMessageContacts
 * @property EAdminMessageContact[] $eAdminMessageContacts0
 * @property ECertificateCommitteeResult[] $eCertificateCommitteeResults
 * @property ECertificateCommitteeResult[] $eCertificateCommitteeResults0
 * @property ECertificateCommittee[] $eCertificateCommittees
 * @property ECertificateCommittee[] $eCertificateCommittees0
 * @property EContractPrice[] $eContractPrices
 * @property ECurriculumSubjectTopic[] $eCurriculumSubjectTopics
 * @property ECurriculumSubject[] $eCurriculumSubjects
 * @property ECurriculum[] $eCurriculums
 * @property EDecree[] $eDecrees
 * @property EDoctorateStudent[] $eDoctorateStudents
 * @property EEmployeeMeta[] $eEmployeeMetas
 * @property EGraduateQualifyingWork[] $eGraduateQualifyingWorks
 * @property EGraduateQualifyingWork[] $eGraduateQualifyingWorks0
 * @property EGroup[] $eGroups
 * @property EIncreasedContractCoefficient[] $eIncreasedContractCoefficients
 * @property EProject[] $eProjects
 * @property ESpecialty[] $eSpecialties
 * @property EStudentContractInvoice[] $eStudentContractInvoices
 * @property EStudentDiploma[] $eStudentDiplomas
 * @property EStudentGpa[] $eStudentGpas
 * @property EStudentMeta[] $eStudentMetas
 * @property EStudentPtt[] $eStudentPtts
 * @property EStudentScholarship[] $eStudentScholarships
 * @property RContract[] $rContracts
 * @property ESpecialty[] $specialties
 * @property HStructureType $structureType
 * @property HLocalityType $type
 * @property EUniversity $university
 */
class EDepartment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'e_department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name', '_university', '_structure_type', 'updated_at', 'created_at'], 'required'],
            [['_university', 'parent', 'position', '_qid'], 'default', 'value' => null],
            [['_university', 'parent', 'position', '_qid'], 'integer'],
            [['active', '_sync'], 'boolean'],
            [['_translations', 'updated_at', 'created_at', '_sync_diff', '_sync_date'], 'safe'],
            [['code', '_structure_type', '_type'], 'string', 'max' => 64],
            [['name'], 'string', 'max' => 256],
            [['_sync_status'], 'string', 'max' => 16],
            [['code'], 'unique'],
            [['_university'], 'exist', 'skipOnError' => true, 'targetClass' => EUniversity::className(), 'targetAttribute' => ['_university' => 'id']],
            [['_type'], 'exist', 'skipOnError' => true, 'targetClass' => HLocalityType::className(), 'targetAttribute' => ['_type' => 'code']],
            [['_structure_type'], 'exist', 'skipOnError' => true, 'targetClass' => HStructureType::className(), 'targetAttribute' => ['_structure_type' => 'code']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            '_university' => 'University',
            '_structure_type' => 'Structure Type',
            'parent' => 'Parent',
            'position' => 'Position',
            'active' => 'Active',
            '_translations' => 'Translations',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
            '_type' => 'Type',
            '_sync' => 'Sync',
            '_qid' => 'Qid',
            '_sync_diff' => 'Sync Diff',
            '_sync_date' => 'Sync Date',
            '_sync_status' => 'Sync Status',
        ];
    }

    /**
     * Gets query for [[EAcademicInformationDatas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEAcademicInformationDatas()
    {
        return $this->hasMany(EAcademicInformationData::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[EAcademicInformations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEAcademicInformations()
    {
        return $this->hasMany(EAcademicInformation::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[EAdminMessageContacts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEAdminMessageContacts()
    {
        return $this->hasMany(EAdminMessageContact::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[EAdminMessageContacts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEAdminMessageContacts0()
    {
        return $this->hasMany(EAdminMessageContact::className(), ['_student_department' => 'id']);
    }

    /**
     * Gets query for [[ECertificateCommitteeResults]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getECertificateCommitteeResults()
    {
        return $this->hasMany(ECertificateCommitteeResult::className(), ['_faculty' => 'id']);
    }

    /**
     * Gets query for [[ECertificateCommitteeResults0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getECertificateCommitteeResults0()
    {
        return $this->hasMany(ECertificateCommitteeResult::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[ECertificateCommittees]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getECertificateCommittees()
    {
        return $this->hasMany(ECertificateCommittee::className(), ['_faculty' => 'id']);
    }

    /**
     * Gets query for [[ECertificateCommittees0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getECertificateCommittees0()
    {
        return $this->hasMany(ECertificateCommittee::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[EContractPrices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEContractPrices()
    {
        return $this->hasMany(EContractPrice::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[ECurriculumSubjectTopics]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getECurriculumSubjectTopics()
    {
        return $this->hasMany(ECurriculumSubjectTopic::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[ECurriculumSubjects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getECurriculumSubjects()
    {
        return $this->hasMany(ECurriculumSubject::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[ECurriculums]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getECurriculums()
    {
        return $this->hasMany(ECurriculum::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[EDecrees]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEDecrees()
    {
        return $this->hasMany(EDecree::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[EDoctorateStudents]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEDoctorateStudents()
    {
        return $this->hasMany(EDoctorateStudent::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[EEmployeeMetas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEEmployeeMetas()
    {
        return $this->hasMany(EEmployeeMeta::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[EGraduateQualifyingWorks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEGraduateQualifyingWorks()
    {
        return $this->hasMany(EGraduateQualifyingWork::className(), ['_faculty' => 'id']);
    }

    /**
     * Gets query for [[EGraduateQualifyingWorks0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEGraduateQualifyingWorks0()
    {
        return $this->hasMany(EGraduateQualifyingWork::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[EGroups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEGroups()
    {
        return $this->hasMany(EGroup::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[EIncreasedContractCoefficients]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEIncreasedContractCoefficients()
    {
        return $this->hasMany(EIncreasedContractCoefficient::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[EProjects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEProjects()
    {
        return $this->hasMany(EProject::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[ESpecialties]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getESpecialties()
    {
        return $this->hasMany(ESpecialty::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[EStudentContractInvoices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEStudentContractInvoices()
    {
        return $this->hasMany(EStudentContractInvoice::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[EStudentDiplomas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEStudentDiplomas()
    {
        return $this->hasMany(EStudentDiploma::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[EStudentGpas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEStudentGpas()
    {
        return $this->hasMany(EStudentGpa::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[EStudentMetas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEStudentMetas()
    {
        return $this->hasMany(EStudentMeta::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[EStudentPtts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEStudentPtts()
    {
        return $this->hasMany(EStudentPtt::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[EStudentScholarships]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEStudentScholarships()
    {
        return $this->hasMany(EStudentScholarship::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[RContracts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRContracts()
    {
        return $this->hasMany(RContract::className(), ['_department' => 'id']);
    }

    /**
     * Gets query for [[Specialties]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSpecialties()
    {
        return $this->hasMany(ESpecialty::className(), ['id' => '_specialty'])->viaTable('e_increased_contract_coefficient', ['_department' => 'id']);
    }

    /**
     * Gets query for [[StructureType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStructureType()
    {
        return $this->hasOne(HStructureType::className(), ['code' => '_structure_type']);
    }

    /**
     * Gets query for [[Type]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(HLocalityType::className(), ['code' => '_type']);
    }

    /**
     * Gets query for [[University]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUniversity()
    {
        return $this->hasOne(EUniversity::className(), ['id' => '_university']);
    }
}
