
// handleTemplateSave({ id, name, subject, body }) {
    //   const index = this.emailTemplate.findIndex((t) => t.id === id)

    //   if (index !== -1) {
    //     this.emailTemplate = [
    //       ...this.emailTemplate.slice(0, index),
    //       { id, name, subject, body },
    //       ...this.emailTemplate.slice(index + 1),
    //     ]
    //     console.log(this.emailTemplate.slice(0, index))
    //   } else {
    //     this.emailTemplate = [
    //       {
    //         id: this.emailTemplate.length + 1,
    //         name,
    //         subject,
    //         body,
    //       },
    //       ...this.emailTemplate,
    //     ]
    //     console.log(...this.emailTemplate.slice(0, index))
    //   }

    //   this.$bvModal.hide('EmailTemplateEditorModal')
    // },