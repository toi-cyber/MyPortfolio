<template>
  <q-form @submit.prevent="onSubmit" @reset="onReset" ref="formRef">
    <q-card flat class="q-pa-md">
      <q-card-section>
        <div class="text-h6">お問い合わせフォーム</div>
        <q-input
          filled
          v-model="form.name"
          label="お名前"
          required
          class="q-mb-md"
        />
        <q-input
          filled
          v-model="form.email"
          label="メールアドレス"
          type="email"
          required
          class="q-mb-md"
        />
        <q-input
          filled
          v-model="form.subject"
          label="件名"
          required
          class="q-mb-md"
        />
        <q-input
          filled
          v-model="form.message"
          label="メッセージ"
          type="textarea"
          autogrow
          required
        />
      </q-card-section>
      <q-card-actions align="right">
        <q-btn label="リセット" color="grey" @click="onReset" flat />
        <q-btn label="送信" color="primary" type="submit" />
      </q-card-actions>
    </q-card>
  </q-form>
</template>

<script>
export default {
  data() {
    return {
      form: {
        name: '',
        email: '',
        subject: '',
        message: ''
      }
    };
  },
  methods: {
    onSubmit() {
      // 送信処理 (例: APIコール)
      if (this.$refs.formRef.validate()) {
        console.log("送信されました:", this.form);
        // ここに送信ロジックを追加
        alert("お問い合わせを送信しました！");
        this.onReset(); // フォームをリセット
      }
    },
    onReset() {
      // フォームをリセット
      this.form = {
        name: '',
        email: '',
        subject: '',
        message: ''
      };
      this.$refs.formRef.resetValidation();
    }
  }
};
</script>
